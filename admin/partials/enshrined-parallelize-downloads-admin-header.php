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

<div class='wrap'>

    <div class="enshrined_parallel_main">
        <div class="enshrined_parallel_main-header">
            <h2>Parallelize Downloads</h2>

            <p>This plugin will allow you to load your images from multiple domains, therfore allowing your browser to download more at a time. This is also known as domain sharding.</p>

            <p>In order to use this plugin, you will need to set up domains/subdomains with DNS A records that point to this server <span class="code"><?php echo $_SERVER['SERVER_ADDR']; ?></span> (we suggest using no more that 3 or 4). Once these are set up and resolving correctly, you can enter them in the box below and let the plugin handle the rest.</p>

            <p class="small"><em><strong>Warning:</strong> Make sure that any domains you add below point to this website otherwise your images will break.</em></p>
        </div>