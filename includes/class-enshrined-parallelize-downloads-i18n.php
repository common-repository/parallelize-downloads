<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://enshrined.co.uk
 * @since      1.0.0
 *
 * @package    Enshrined_Parallelize_Downloads
 * @subpackage Enshrined_Parallelize_Downloads/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Enshrined_Parallelize_Downloads
 * @subpackage Enshrined_Parallelize_Downloads/includes
 * @author     Daryll Doyle <daryll@enshrined.co.uk>
 */
class Enshrined_Parallelize_Downloads_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'enshrined-parallelize-downloads',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
