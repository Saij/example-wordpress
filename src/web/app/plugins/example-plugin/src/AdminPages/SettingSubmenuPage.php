<?php

namespace VAF\ExamplePlugin\AdminPages;

use VAF\WP\Library\AdminPages\AdminPage;
use VAF\WP\Library\AdminPages\MenuItem;
use VAF\WP\Library\Exceptions\Template\NamespaceNotRegistered;
use VAF\WP\Library\Exceptions\Template\TemplateNotFound;
use VAF\WP\Library\Template;

class SettingSubmenuPage extends AdminPage
{
    public function getMenu(): MenuItem
    {
        $menuItem = new MenuItem('settings-1', 'Inside Settings');
        $menuItem->setParent(MenuItem::PREDEFINED_MENU_SETTINGS);
        return $menuItem;
    }

    public function getTitle(): string
    {
        return 'Inside Settings Menu';
    }

    /**
     * @return string
     * @throws NamespaceNotRegistered
     * @throws TemplateNotFound
     */
    public function render(): string
    {
        return Template::render('ExamplePlugin/simpleTemplate', [
            'page' => 'SettingSubmenuPage'
        ]);
    }
}