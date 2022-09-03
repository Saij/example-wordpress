<?php

namespace VAF\ExamplePlugin\AdminPages;

use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup;
use VAF\WP\Library\AdminPages\MenuItem;
use VAF\WP\Library\Exceptions\Module\ModuleNotRegistered;
use VAF\WP\Library\Exceptions\Module\Setting\SettingsGroupNotRegistered;
use VAF\WP\Library\Settings\SettingsGroup;

class SettingsPage extends \VAF\WP\Library\AdminPages\SettingsPage
{
    public function getMenu(): MenuItem
    {
        $menuItem = new MenuItem('my-settings-page', 'Settings Page');
        $menuItem->setIcon('dashicons-admin-generic');
        return $menuItem;
    }

    public function getTitle(): string
    {
        return 'My Settings';
    }

    /**
     * @return SettingsGroup
     * @throws SettingsGroupNotRegistered
     */
    protected function getSettingsGroup(): SettingsGroup
    {
        return FirstSettingsGroup::getInstance();
    }
}