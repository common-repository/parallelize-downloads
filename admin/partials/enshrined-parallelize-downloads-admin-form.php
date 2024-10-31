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
?>

<label for="parallelize_downloads_domains" class="enshrined_parallel_label">Parallelize Domains</label>
<p class="parallelize_downloads_info">Please add one domain per line</p>
<textarea name="parallelize_downloads_domains" id="parallelize_downloads_domains" class="parallelize_domain_list">
<?php echo get_option( 'parallelize_downloads_domains' ) ?>
</textarea>