<?php
/**
 * Plugin Name: My Plugin
 * Description: Helper plugin
 * Version: 0.0.1
 * Author: Germain-Italic
 * Author URI: https://github.com/germain-italic/wp-plugin-base
 */

// Include Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Init
$helper = new My\Plugin\Plugin();
