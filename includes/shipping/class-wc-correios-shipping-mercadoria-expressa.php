<?php
/**
 * Correios Mercadoria Expressa shipping method.
 *
 * @package WooCommerce_Correios/Classes/Shipping
 * @since   3.0.0
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Mercadoria Expressa shipping method class.
 */
class WC_Correios_Shipping_Mercadoria_Expressa extends WC_Correios_International_Shipping {

	/**
	 * Initialize Mercadoria Expressa.
	 */
	public function __construct() {
		$this->id           = 'correios_mercadoria_expressa';
		$this->method_title = __( 'Mercadoria Expressa', 'woocommerce-correios' );
		$this->more_link    = '';

		/**
		 * 110 - Mercadoria Expressa.
		 */
		$this->code = '110';

		parent::__construct();
	}
}
