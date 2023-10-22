<?php

namespace My\Plugin;

class AdminPages extends Plugin {

    /**
     * The main Admin page
     *
     * @return void
     */
    public function admin_page() {
        require_once( plugin_dir_path( __FILE__ ) . '/../views/admin/index.php' );
		$this->greetings();
    }

    /**
     * The Styles Index page
     *
     * @return void
     */
    public function admin_styles_page() {
        require_once( plugin_dir_path( __FILE__ ) . '/../views/admin/styles.php' );
    }
}