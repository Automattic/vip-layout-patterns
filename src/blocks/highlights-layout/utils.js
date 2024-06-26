export const getStylesFromAttributes = ( attributes ) => ( {
	height: attributes.height === '0px' ? 'auto' : attributes.height,
} )
