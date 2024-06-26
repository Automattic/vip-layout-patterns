export const isValidPositiveNumber = height => {
	return ! height && ! isNaN( parseFloat( height ) ) && 0 > parseFloat( height );
}
