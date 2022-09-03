<?php

namespace VAF\ExamplePlugin\AdminPages;

use VAF\WP\Library\AdminPages\AdminPage;
use VAF\WP\Library\AdminPages\MenuItem;
use VAF\WP\Library\Exceptions\Template\NamespaceNotRegistered;
use VAF\WP\Library\Exceptions\Template\TemplateNotFound;
use VAF\WP\Library\Template;

final class WithSubMenuPage extends AdminPage
{
    public function getMenu(): MenuItem
    {
        $menuItem = new MenuItem('with-submenu-page', 'With Submenu');
        $menuItem->setIcon('dashicons-star-filled');
        $menuItem->setSubMenuTitle('Submenu');

        return $menuItem;
    }

    public function getTitle(): string
    {
        return 'A menu item with submenu';
    }

    /**
     * @return string
     * @throws NamespaceNotRegistered
     * @throws TemplateNotFound
     */
    public function render(): string
    {
        return Template::render('ExamplePlugin/simpleTemplate', [
            'page' => 'WithSubMenuPage'
        ]);
    }
}
