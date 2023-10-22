<?php

namespace My\Plugin;

class Plugin {

    public function __construct() {
        // Hook into the WordPress initialization action
        add_action('init', array($this, 'initialize'));
    }

    public function initialize() {
        new AdminMenu();
    }

    /**
     * A demo function
     *
     * @return void
     */
    public static function greetings() {
        echo "<p>Hello world!<br><small>from the <code>greetings()</code> function</small></p>";
    }
}
