<?php
/**
 * Plugin Name: Updateable Plugin
 * Description: A simple plugin for testing updates.
 * Version: 1.0.4
 * Author: Mark
 * License: GPL2
 */

// Include plugin update checker
require_once plugin_dir_path( __FILE__ ) . 'plugin-update-checker.php';


// Add a menu item to the admin dashboard
add_action('admin_menu', 'updateable_plugin_add_admin_menu');

function updateable_plugin_add_admin_menu() {
	add_menu_page(
		'Updateable Plugin',           // Page title
		'Updateable Plugin',           // Menu title
		'manage_options',              // Capability
		'updateable-plugin',           // Menu slug
		'updateable_plugin_admin_page',// Callback function
		'dashicons-update',            // Icon
		80                             // Position
	);
}


// Admin page content
function updateable_plugin_admin_page() {
	?>
	<div class="wrap">
		<h1>Updateable Plugin</h1>
		<p>This is a test plugin. Use this space to build and test features!</p>
	</div>
	<?php
}