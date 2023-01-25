<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://raymondandpartners.com
 * @since             1.0.0
 * @package           Rap_Mwc
 *
 * @wordpress-plugin
 * Plugin Name:       RaP MultiversX wallet connect
 * Plugin URI:        https://raymondandpartners.com
 * Description:       This plugin will enable MultiversX wallet connection inside Wordpress.
This will NOT allow users to connect and modify website content, BUT enable hidden content.
 * Version:           1.0.0
 * Author:            DNV
 * Author URI:        https://raymondandpartners.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rap-mwc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RAP_MWC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rap-mwc-activator.php
 */
function activate_rap_mwc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rap-mwc-activator.php';
	Rap_Mwc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rap-mwc-deactivator.php
 */
function deactivate_rap_mwc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rap-mwc-deactivator.php';
	Rap_Mwc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rap_mwc' );
register_deactivation_hook( __FILE__, 'deactivate_rap_mwc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rap-mwc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rap_mwc() {

	$plugin = new Rap_Mwc();
	$plugin->run();

}
run_rap_mwc();
