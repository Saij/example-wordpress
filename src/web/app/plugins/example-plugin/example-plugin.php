<?php

/**
 * @noinspection PhpUnhandledExceptionInspection
 */

/**
 * Plugin Name:       Example Plugin
 * Description:       Plugin for developing vaf-wp-library
 * Version:           1.0.0
 * Requires at least: 5.9.3
 * Author:            Christoph Friedrich <christoph.friedrich@vonaffenfels.de>
 * Author URI:        https://www.vonaffenfels.de
 */

use VAF\ExamplePlugin\Plugin;

if (!defined('ABSPATH')) {
    die('');
}

$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    require_once $autoloadPath;
}

Plugin::getInstance()
    ->configure(__FILE__)
    ->start();
