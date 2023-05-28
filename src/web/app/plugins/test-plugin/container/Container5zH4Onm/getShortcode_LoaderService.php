<?php

namespace Container5zH4Onm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShortcode_LoaderService extends VAF_WP_Library_Kernel_PluginKernelDebugContainer
{
    /**
     * Gets the public 'shortcode.loader' shared autowired service.
     *
     * @return \VAF\WP\Library\Shortcode\Loader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/vonaffenfels/vaf-wp-library/src/Shortcode/Loader.php';

        return $container->services['shortcode.loader'] = new \VAF\WP\Library\Shortcode\Loader(($container->services['kernel'] ?? $container->get('kernel', 1)), ['VAF\\WP\\TestPlugin\\Shortcodes\\MyShortcodes' => ['simple-shortcode' => ['method' => 'simpleShortcode', 'params' => [], 'paramsLower' => [], 'serviceParams' => []], 'another-shortcode' => ['method' => 'anotherShortcode', 'params' => [], 'paramsLower' => [], 'serviceParams' => []], 'hello-world' => ['method' => 'helloWorldShortcode', 'params' => ['name' => NULL, 'goodbye' => false, 'repeat' => 1], 'paramsLower' => ['name' => 'name', 'goodbye' => 'goodBye', 'repeat' => 'repeat'], 'serviceParams' => ['plugin' => 'VAF\\WP\\TestPlugin\\Plugin']]]]);
    }
}
