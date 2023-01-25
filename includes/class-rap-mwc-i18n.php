<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://raymondandpartners.com
 * @since      1.0.0
 *
 * @package    Rap_Mwc
 * @subpackage Rap_Mwc/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rap_Mwc
 * @subpackage Rap_Mwc/includes
 * @author     Daniel Vasu <dot.hns@gmail.com>
 */
class Rap_Mwc_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rap-mwc',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
