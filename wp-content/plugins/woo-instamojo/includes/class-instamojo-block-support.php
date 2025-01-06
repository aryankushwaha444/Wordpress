<?php
use Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType;

final class WP_Gateway_Instamojo_Blocks_Support extends AbstractPaymentMethodType {
	
	private $gateway;
	
	protected $name = 'instamojo'; // payment gateway id

	public function initialize() {
		$this->settings = get_option( "woocommerce_{$this->name}_settings", array() );
	}

	public function is_active() {
		return ! empty( $this->settings[ 'enabled' ] ) && 'yes' === $this->settings[ 'enabled' ];
	}

	public function get_payment_method_script_handles() {
		wp_register_script(
			'instamojo-blocks-integration',
			plugin_dir_url( __DIR__ ) . '/assets/js/instamojo-checkout.js',
			array(
				'wc-blocks-registry',
				'wc-settings',
				'wp-element',
				'wp-html-entities',
				'wp-i18n',
			),
			null,
			true
		);
		if (function_exists('wp_set_script_translations')) 
        {
            wp_set_script_translations('instamojo-blocks-integration');
        }
		return array( 'instamojo-blocks-integration' );
	}

	public function get_payment_method_data() {
		return array(
			'title'        => $this->get_setting( 'title' ),
			'description'  => $this->get_setting( 'description' ),
		);
	}
}