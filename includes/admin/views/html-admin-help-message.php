<?php
/**
 * Admin help message.
 *
 * @package WooCommerce_Correios/Admin/Settings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( apply_filters( 'woocommerce_correios_help_message', true ) ) : ?>
	<div class="updated woocommerce-message">
		<p><?php echo esc_html( sprintf( __( 'Help us keep the %s plugin free making a donation or rate &#9733;&#9733;&#9733;&#9733;&#9733; on WordPress.org. Thank you in advance!', 'woocommerce-correios' ), __( 'WooCommerce Correios', 'woocommerce-correios' ) ) ); ?></p>
		<p><a href="http://claudiosmweb.com/doacoes/" target="_blank" class="button button-primary"><?php esc_html_e( 'Make a donation', 'woocommerce-correios' ); ?></a> <a href="https://wordpress.org/support/view/plugin-reviews/woocommerce-correios?filter=5#postform" target="_blank" class="button button-secondary"><?php esc_html_e( 'Make a review', 'woocommerce-correios' ); ?></a></p>
	</div>
<?php endif;
