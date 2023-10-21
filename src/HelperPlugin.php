<?php

namespace My\Plugin;

class HelperPlugin {

    public function __construct() {
        // Hook into the WordPress initialization action
        add_action('init', array($this, 'initialize'));
    }

    public function initialize() {
        // Hook into the admin menu action to add your menu page
        add_action('admin_menu', array($this, 'admin_menu'));
    }

    public function admin_menu() {
		add_menu_page(
			'My Plugin Admin page',		// Page title
			'My Plugin',                // Menu title
			'publish_pages',            // Capability required to access
			'myplugin',       			// Menu slug
			array($this, 'admin_page'),	// Callback function to render the page
            dirname(plugin_dir_url(__FILE__)) . '/assets/my-plugin.svg' // Use custom SVG icon
		);
	}


    public function admin_page() {
        require_once( plugin_dir_path( __FILE__ ) . '/../views/shared/header.php' );
		$this->greetings();
        require_once( plugin_dir_path( __FILE__ ) . '/../views/shared/footer.php' );
    }

    public static function greetings() {
        echo "<p>Hello world!</p>";
        wp_die();
    }
}
