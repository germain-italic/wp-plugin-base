<?php

namespace My\Plugin;

class AdminMenu {

    public function __construct() {
        // Hook into the admin menu action to add your menu page
        add_action('admin_menu', array($this, 'register_admin_menu'));
        add_action('admin_menu', array($this, 'register_admin_styles_page'));
    }

    /**
     * Register the Admin menu and main Admin page
     *
     * Creates a new menu item in Admin nav with custom icon and link to the admin page
     *
     * @return void
     */
    public function register_admin_menu() {
		add_menu_page(
			'My Plugin Admin page',		// Page title
			'My Plugin',                // Menu title
			'publish_pages',            // Capability required to access
			'myplugin',       			// Menu slug
			array(new AdminPages(), 'admin_page'),	// Callback function to render the page
            dirname(plugin_dir_url(__FILE__)) . '/assets/my-plugin.svg' // Use custom SVG icon
		);
	}

    /**
     * Register an Admin sub-menu page
     *
     * This example displays WordPress' default styles available in Admin
     *
     * @return void
     */
    public function register_admin_styles_page() {
        add_submenu_page(
            'myplugin',                         // Parent menu slug
            'Styles index',                     // Page title
            'Styles index',                     // Menu title
            'manage_options',                   // Capability required to access
            'myplugin-admin-styles',            // Menu slug (unique identifier)
            array(new AdminPages(), 'admin_styles_page')   // Callback function to generate page content
        );
    }
}