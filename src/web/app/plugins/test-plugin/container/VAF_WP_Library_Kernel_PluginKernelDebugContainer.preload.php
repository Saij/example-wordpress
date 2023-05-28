<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 5).'/vendor/autoload.php';
(require __DIR__.'/VAF_WP_Library_Kernel_PluginKernelDebugContainer.php')->set(\Container5zH4Onm\VAF_WP_Library_Kernel_PluginKernelDebugContainer::class, null);
require __DIR__.'/Container5zH4Onm/getShortcode_LoaderService.php';
require __DIR__.'/Container5zH4Onm/getHook_LoaderService.php';
require __DIR__.'/Container5zH4Onm/getMyShortcodesService.php';
require __DIR__.'/Container5zH4Onm/getTestHookService.php';

$classes = [];
$classes[] = 'VAF\WP\TestPlugin\Hooks\TestHook';
$classes[] = 'VAF\WP\TestPlugin\Shortcodes\MyShortcodes';
$classes[] = 'VAF\WP\Library\Hook\Loader';
$classes[] = 'VAF\WP\Library\Kernel\PluginKernel';
$classes[] = 'VAF\WP\TestPlugin\Plugin';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'VAF\WP\Library\Shortcode\Loader';

$preloaded = Preloader::preload($classes);