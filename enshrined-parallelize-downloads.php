<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://enshrined.co.uk
 * @since             1.0.0
 * @package           Enshrined_Parallelize_Downloads
 *
 * @wordpress-plugin
 * Plugin Name:       Parallelize Downloads
 * Plugin URI:        https://enshrined.co.uk/parallelize-downloads/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Daryll Doyle
 * Author URI:        http://enshrined.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       enshrined-parallelize-downloads
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-enshrined-parallelize-downloads-activator.php
 */
function activate_enshrined_parallelize_downloads() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-enshrined-parallelize-downloads-activator.php';
	Enshrined_Parallelize_Downloads_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-enshrined-parallelize-downloads-deactivator.php
 */
function deactivate_enshrined_parallelize_downloads() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-enshrined-parallelize-downloads-deactivator.php';
	Enshrined_Parallelize_Downloads_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_enshrined_parallelize_downloads' );
register_deactivation_hook( __FILE__, 'deactivate_enshrined_parallelize_downloads' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-enshrined-parallelize-downloads.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_enshrined_parallelize_downloads() {

	$plugin = new Enshrined_Parallelize_Downloads();
	$plugin->run();

}
run_enshrined_parallelize_downloads();
