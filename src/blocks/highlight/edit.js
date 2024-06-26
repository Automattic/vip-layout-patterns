import { useMemo } from 'react';
/**
 * WordPress dependencies
 */
import {
	InnerBlocks,
	BlockControls,
	BlockVerticalAlignmentToolbar,
	InspectorControls,
	useBlockProps,
	useInnerBlocksProps,
	store as blockEditorStore,
} from '@wordpress/block-editor';
import {
	__experimentalUseCustomUnits as useCustomUnits,
	PanelBody,
	__experimentalUnitControl as UnitControl,
} from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';
import { sprintf, __ } from '@wordpress/i18n';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
; */
import './editor.scss'

function HighlightEdit( {
	attributes: { verticalAlignment, width, templateLock, allowedBlocks },
	setAttributes,
	clientId,
} ) {
	const classes = 'block-core-columns';

	const units = useCustomUnits( {
		availableUnits: [ '%', 'px', 'em', 'rem', 'vw' ],
	} );

	const { columnsIds, rootClientId, childBlocksNames } = useSelect(
		( select ) => {
			const { getBlockOrder, getBlockRootClientId, getBlock } =
				select( blockEditorStore );

			const rootId = getBlockRootClientId( clientId );
			const childClientIds = getBlockOrder( clientId );
			const childBlocksNames = childClientIds.map( ( id ) => getBlock( id )?.name );

			return {
				rootClientId: rootId,
				columnsIds: getBlockOrder( rootId ),
				childBlocksNames,
			};
		},
		[ clientId ]
	);

	/**
	 * Only allow one inner block except for image blocks when it can add another one block
	 */
	const renderAppender = useMemo(() => {
		if (
			childBlocksNames.length === 0 ||
			(childBlocksNames.length === 1 &&
				childBlocksNames[0] === 'core/image')
		) {
			return InnerBlocks.ButtonBlockAppender;
		}

		return false;
	}, [ childBlocksNames ]);

	const { updateBlockAttributes } = useDispatch( blockEditorStore );

	const updateAlignment = ( value ) => {
		// Update own alignment.
		setAttributes( { verticalAlignment: value } );
		// Reset parent Columns block.
		updateBlockAttributes( rootClientId, {
			verticalAlignment: null,
		} );
	};

	const widthWithUnit = Number.isFinite( width ) ? width + '%' : width;
	const blockProps = useBlockProps( {
		className: classes,
		style: widthWithUnit ? { flexBasis: widthWithUnit } : undefined,
	} );

	const columnsCount = columnsIds.length;
	const currentColumnPosition = columnsIds.indexOf( clientId ) + 1;

	const label = sprintf(
		/* translators: 1: Block label (i.e. "Block: Column"), 2: Position of the selected block, 3: Total number of sibling blocks of the same type */
		__( '%1$s (%2$d of %3$d)', 'vip-layout' ),
		blockProps[ 'aria-label' ],
		currentColumnPosition,
		columnsCount
	);

	const innerBlocksProps = useInnerBlocksProps(
		{ 'aria-label': label, ...blockProps },
		{
			renderAppender,
		}
	);

	return (
		<>
			<BlockControls>
				<BlockVerticalAlignmentToolbar
					onChange={ updateAlignment }
					value={ verticalAlignment }
					controls={ [ 'top', 'center', 'bottom', 'stretch' ] }
				/>
			</BlockControls>
			<InspectorControls>
				<PanelBody title={ __( 'Settings', 'vip-layout' ) }>
					<UnitControl
						label={ __( 'Width', 'vip-layout' ) }
						labelPosition="edge"
						__unstableInputWidth="80px"
						value={ width || '' }
						onChange={ ( nextWidth ) => {
							nextWidth =
								0 > parseFloat( nextWidth ) ? '0' : nextWidth;
							setAttributes( { width: nextWidth } );
						} }
						units={ units }
					/>
				</PanelBody>
			</InspectorControls>
			<div { ...innerBlocksProps } />
		</>
	);
}

export default HighlightEdit;
