<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://enshrined.co.uk
 * @since      1.0.0
 *
 * @package    Enshrined_Parallelize_Downloads
 * @subpackage Enshrined_Parallelize_Downloads/admin/partials
 */

echo '<form method="POST" action="options.php">';

settings_fields( 'parallelize_downloads' );
do_settings_sections( 'parallelize_downloads_section' );
submit_button();

echo '</form>';