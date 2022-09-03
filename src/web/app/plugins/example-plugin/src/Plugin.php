<?php

namespace VAF\ExamplePlugin;

use VAF\ExamplePlugin\AdminPages\FirstSubMenuPage;
use VAF\ExamplePlugin\AdminPages\SettingsPage;
use VAF\ExamplePlugin\AdminPages\SettingSubmenuPage;
use VAF\ExamplePlugin\AdminPages\SimpleMenuPage;
use VAF\ExamplePlugin\AdminPages\WithSubMenuPage;
use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup;
use VAF\ExamplePlugin\Shortcodes\SimpleShortcode;
use VAF\WP\Library\AbstractPlugin;
use VAF\WP\Library\Exceptions\Module\InvalidModuleClass;
use VAF\WP\Library\Exceptions\Module\ModuleAlreadyRegistered;
use VAF\WP\Library\Exceptions\Plugin\PluginAlreadyConfigured;
use VAF\WP\Library\Exceptions\Template\FunctionAlreadyRegistered;
use VAF\WP\Library\Modules\AdminPagesModule;
use VAF\WP\Library\Modules\SettingsModule;
use VAF\WP\Library\Modules\ShortcodesModule;
use VAF\WP\Library\Template;

final class Plugin extends AbstractPlugin
{
    /**
     * @return AbstractPlugin
     * @throws InvalidModuleClass
     * @throws ModuleAlreadyRegistered
     * @throws PluginAlreadyConfigured
     */
    final protected function configurePlugin(): AbstractPlugin
    {
        Template::registerFunction('customFunction', function (string $name = 'World'): string {
            return sprintf("Hello, %s!", $name);
        });

        $this->registerModule(SettingsModule::class, SettingsModule::configure([
            FirstSettingsGroup::class
        ]));

        $this->registerModule(ShortcodesModule::class, ShortcodesModule::configure([
            SimpleShortcode::class
        ]));

        $this->registerModule(AdminPagesModule::class, AdminPagesModule::configure([
            SimpleMenuPage::class,
            SettingSubmenuPage::class,
            SettingsPage::class,

            // Submenu
            WithSubMenuPage::class,
            FirstSubMenuPage::class
        ]));

        return $this;
    }
}
