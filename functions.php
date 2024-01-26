<?php

add_filter( 'woocommerce_order_number', 'gs_order_number_prefix' );

/**
 * Add suffix to the WooCommerce order number.
 *
 * @param int $order_id The ID of the order.
 *
 * @return string The modified order number with the custom prefix.
 */
function gs_order_number_prefix( $order_id ) {
	return 'KCG-' . $order_id;
}
