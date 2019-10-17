<?php
// Single Product
add_filter( 'single_add_to_cart_text', 'custom_single_add_to_cart_text' );
function custom_single_add_to_cart_text() {
	return 'Add to cart'; // Change this to change the text on the Single Product Add to cart button.
}
// Variable Product
add_filter( 'variable_add_to_cart_text', 'custom_variable_add_to_cart_text' );
function custom_variable_add_to_cart_text() {
	return 'Select options'; // Change this to change the text on the Variable Product button.
}
// Grouped Product
add_filter( 'grouped_add_to_cart_text', 'custom_grouped_add_to_cart_text' );
function custom_grouped_add_to_cart_text() {
	return 'View options'; // Change this to change the text on the Grouped Product button.
}
// External Product
add_filter( 'external_add_to_cart_text', 'custom_external_add_to_cart_text' );
function custom_external_add_to_cart_text() {
	return 'Read More'; // Change this to change the text on the External Product button.
}
// Default
add_filter( 'add_to_cart_text', 'custom_add_to_cart_text' );
function custom_add_to_cart_text() {
	return 'Add to cart'; // Change this to change the text on the Default button.
}
?>
