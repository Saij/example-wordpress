<?php

namespace VAF\ExamplePlugin\AdminPages;

use VAF\WP\Library\AdminPages\AdminPage;
use VAF\WP\Library\AdminPages\MenuItem;
use VAF\WP\Library\Exceptions\Template\NamespaceNotRegistered;
use VAF\WP\Library\Exceptions\Template\TemplateNotFound;
use VAF\WP\Library\Template;

final class FirstSubMenuPage extends AdminPage
{
    public function getMenu(): MenuItem
    {
        $menuItem = new MenuItem('sub-1', 'Sub Menu 1');
        $menuItem->setParent(WithSubMenuPage::class);
        return $menuItem;
    }

    public function getTitle(): string
    {
        return 'First Submenu';
    }

    /**
     * @return string
     * @throws NamespaceNotRegistered
     * @throws TemplateNotFound
     */
    public function render(): string
    {
        return Template::render('ExamplePlugin/simpleTemplate', [
            'page' => 'FirstSubMenuPage'
        ]);
    }
}
