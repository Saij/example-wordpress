<?php

/**
 * Plugin Name:       Test Plugin
 * Description:       Plugin to develop vaf-wp-library
 * Version:           1.0.0
 * Requires at least: 6.2
 * Author:            Christoph Friedrich <christoph.friedrich@vonaffenfels.de>
 * Author URI:        https://www.vonaffenfels.de
 */

use VAF\WP\TestPlugin\Plugin;

if (!defined('ABSPATH')) {
    die('');
}

$initAutoload = function () {
    $autoloadPath = __DIR__ . '/vendor/autoload.php';
    if (file_exists($autoloadPath)) {
        require_once $autoloadPath;
    }
};

add_action('init', function () {
    Plugin::registerPlugin(__FILE__, defined('WP_DEBUG') && WP_DEBUG);
});

register_activation_hook(__FILE__, $initAutoload);
