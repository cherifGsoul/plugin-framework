<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Plugin_Framework
 * @author    Cherif BOUCHELAEGHEM cherifbouchelaghem@gmail.com
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Framework
 * Plugin URI:        http://cherifbouchelaghem.wordpress.com
 * Description:       Framework for wordpress plugins
 * Version:           1.0.0
 * Author:            Cherif BOUCHELAEGHEM
 * Author URI:        http://cherifbouchelaghem.wordpress.com
 * Text Domain:       plugin-framework-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/cherifGsoul/plugin_framework
 */
define('CORE_PATH',dirname(__FILE__).'/includes/framework');
define('VENDORS',dirname(__FILE__).'/includes/vendors');

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-framework.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'includes/framework/class-core.php' );
require_once(plugin_dir_path(__FILE__ ).'public/class-plugin-framework.php');
spl_autoload_register(array('Core','autoload'));

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Framework with the name of the class defined in
 *   `class-plugin-framework.php`
 */
register_activation_hook( __FILE__, array( 'Plugin_Framework', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Plugin_Framework', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Framework with the name of the class defined in
 *   `class-plugin-framework.php`
 */
add_action( 'plugins_loaded', array( 'Plugin_Framework', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-framework-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Framework_Admin with the name of the class defined in
 *   `class-plugin-framework-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-plugin-framework-admin.php' );
	add_action( 'plugins_loaded', array( 'Plugin_Framework_Admin', 'get_instance' ) );

}
