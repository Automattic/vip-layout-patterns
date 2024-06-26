/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	useInnerBlocksProps,
	__experimentalBlockVariationPicker,
	store as blockEditorStore,
	InspectorControls,
} from '@wordpress/block-editor';
import { useDispatch, useSelect } from '@wordpress/data';
import {
	createBlocksFromInnerBlocksTemplate,
	store as blocksStore,
} from '@wordpress/blocks';
import {
	__experimentalUseCustomUnits as useCustomUnits,
	PanelBody,
	__experimentalUnitControl as UnitControl,
} from '@wordpress/components';

import { getStylesFromAttributes } from './utils';
import { isValidPositiveNumber } from '../../utils/number'

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

function Placeholder( { clientId, name, setAttributes } ) {
	const { blockType, defaultVariation, variations } = useSelect(
		( select ) => {
			const {
				getBlockVariations,
				getBlockType,
				getDefaultBlockVariation,
			} = select( blocksStore );

			return {
				blockType: getBlockType( name ),
				defaultVariation: getDefaultBlockVariation( name, 'block' ),
				variations: getBlockVariations( name, 'block' ),
			};
		},
		[ name ]
	);
	const { replaceInnerBlocks } = useDispatch( blockEditorStore );
	const blockProps = useBlockProps();

	return (
		<div { ...blockProps }>
			<__experimentalBlockVariationPicker
				icon={ blockType?.icon?.src }
				label={ blockType?.title }
				variations={ variations }
				onSelect={ ( nextVariation = defaultVariation ) => {
					if ( nextVariation.attributes ) {
						setAttributes( nextVariation.attributes );
					}
					if ( nextVariation.innerBlocks ) {
						replaceInnerBlocks(
							clientId,
							createBlocksFromInnerBlocksTemplate(
								nextVariation.innerBlocks
							),
							true
						);
					}
				} }
				allowSkip
			/>
		</div>
	);
}

const HighlightsLayoutEditContainerInspectorControls = ( { attributes, setAttributes } ) => {
	const units = useCustomUnits( {
		availableUnits: ['%', 'px', 'em', 'rem', 'vw'],
	} );

	const controls = [];

	if ( attributes.supportsCustomHeight ) {
		controls.push(
			<UnitControl
				label={ __( 'Height', 'vip-layout' ) }
				labelPosition="edge"
				value={ attributes.height }
				__unstableInputWidth="80px"
				onChange={ ( nextHeight, extra ) => {
					nextHeight =
						isValidPositiveNumber( nextHeight )
							? '0px'
							: nextHeight;
					setAttributes( { height: nextHeight } );
				} }
				units={ units }
			/>
		);
	}

	if ( ! controls.length ) {
		return null;
	}

	return (
		<InspectorControls>
			<PanelBody title={ __( 'Settings', 'vip-layout' ) }>
				{ controls }
			</PanelBody>
		</InspectorControls>
	);
}

const HighlightsLayoutEditContainer = ( { attributes, setAttributes } ) => {
	const blockProps = useBlockProps( {
		style: getStylesFromAttributes( attributes ),
	} );
	const innerBlocksProps = useInnerBlocksProps(blockProps, {
		renderAppender: false,
	});

	return (
		<>
			<HighlightsLayoutEditContainerInspectorControls
				attributes={attributes}
				setAttributes={setAttributes}
			/>
			<div {...innerBlocksProps} />
		</>
	);
};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( props ) {
	const { clientId } = props;
	const hasInnerBlocks = useSelect(
		( select ) =>
			select( blockEditorStore ).getBlocks( clientId ).length > 0,
		[ clientId ]
	);
	const Component = hasInnerBlocks
		? HighlightsLayoutEditContainer
		: Placeholder;

	return <Component { ...props } />;
}
