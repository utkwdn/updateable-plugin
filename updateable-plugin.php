<?php
/**
 * Plugin Name: Updateable Plugin
 * Description: A simple plugin for testing updates.
 * Version: 1.0.7
 * Author: Mark
 * License: GPL2
 *
 * @package UpdateablePlugin
 */

// Add a menu item to the admin dashboard.
add_action( 'admin_menu', 'updateable_plugin_add_admin_menu' );

/**
 * Adds menu page for testing
 */
function updateable_plugin_add_admin_menu() {
	add_menu_page(
		'Updateable Plugin',           // Page title.
		'Updateable Plugin',           // Menu title.
		'manage_options',              // Capability.
		'updateable-plugin',           // Menu slug.
		'updateable_plugin_admin_page', // Callback function.
		'dashicons-update',            // Icon.
		80                             // Position.
	);
}


/**
 * Menu page content
 */
function updateable_plugin_admin_page() {
	?>
	<div class="wrap">
		<h1>Updateable Plugin (Updated 7/2/25)</h1>
		<p>This is a test plugin.</p>
	</div>
	<?php
}
