<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://enshrined.co.uk
 * @since      1.0.0
 *
 * @package    Enshrined_Parallelize_Downloads
 * @subpackage Enshrined_Parallelize_Downloads/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Enshrined_Parallelize_Downloads
 * @subpackage Enshrined_Parallelize_Downloads/admin
 * @author     Daryll Doyle <daryll@enshrined.co.uk>
 */
class Enshrined_Parallelize_Downloads_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Enshrined_Parallelize_Downloads_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Enshrined_Parallelize_Downloads_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/enshrined-parallelize-downloads-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Enshrined_Parallelize_Downloads_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Enshrined_Parallelize_Downloads_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/enshrined-parallelize-downloads-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Initialise the menu option
	 */
	public function init_settings_menu() {
		// Create our submenu page
		add_submenu_page( 'options-general.php', 'Parallelize Downloads', 'Parallelize Downloads', 'manage_options', 'parallelize_downloads', array(
			$this,
			'parallelize_downloads_settings_page'
		) );
	}

	/**
	 * Load the page partials
	 */
	public function parallelize_downloads_settings_page() {

		$html = $this->get_admin_template_partial( 'enshrined-parallelize-downloads-admin-header.php' );
		$html .= $this->get_admin_template_partial( 'enshrined-parallelize-downloads-admin-main.php' );
		$html .= $this->get_admin_template_partial( 'enshrined-parallelize-downloads-admin-footer.php' );
		echo $html;
	}

	/**
	 * Load an admin partial
	 *
	 * @param $file
	 *
	 * @return string
	 */
	private function get_admin_template_partial( $file ) {
		ob_start();
		include plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/' . $file;

		return ob_get_clean();
	}

	/**
	 * Initialise the settings page
	 */
	public function init_settings() {
		// Add the section to reading settings so we can add our
		// fields to it
		add_settings_section(
			'parallelize_downloads_section',
			'Download parallelization setup',
			array(
				$this,
				'parallelize_downloads_section_callback_function'
			),
			'parallelize_downloads_section'
		);

		// Add the field with the names and function to use for our new
		// settings, put it in our new section
		add_settings_field(
			'parallelize_downloads_domains',
			'Parallelize Domains',
			'parallelize_downloads_callback_function',
			'parallelize_downloads',
			'parallelize_downloads_section'
		);

		// Register our setting so that $_POST handling is done for us and
		// our callback function just has to echo the <input>
		register_setting( 'parallelize_downloads', 'parallelize_downloads_domains' );
	}

	/**
	 * Echo our form field
	 */
	public function parallelize_downloads_section_callback_function() {
		echo $this->get_admin_template_partial( 'enshrined-parallelize-downloads-admin-form.php' );
	}

}
