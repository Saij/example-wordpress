<?php

namespace Container5zH4Onm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestHookService extends VAF_WP_Library_Kernel_PluginKernelDebugContainer
{
    /**
     * Gets the public 'VAF\WP\TestPlugin\Hooks\TestHook' shared autowired service.
     *
     * @return \VAF\WP\TestPlugin\Hooks\TestHook
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 2).'/src/Hooks/TestHook.php';

        return $container->services['VAF\\WP\\TestPlugin\\Hooks\\TestHook'] = new \VAF\WP\TestPlugin\Hooks\TestHook();
    }
}
