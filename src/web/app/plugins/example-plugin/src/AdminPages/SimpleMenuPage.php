<?php

namespace VAF\ExamplePlugin\AdminPages;

use VAF\WP\Library\AdminPages\AdminPage;
use VAF\WP\Library\AdminPages\MenuItem;
use VAF\WP\Library\Exceptions\Template\NamespaceNotRegistered;
use VAF\WP\Library\Exceptions\Template\TemplateNotFound;
use VAF\WP\Library\Template;

final class SimpleMenuPage extends AdminPage
{
    public function getMenu(): MenuItem
    {
        $menuItem = new MenuItem('simple-page', 'Simple Page');
        $menuItem->setIcon('dashicons-heart');
        return $menuItem;
    }

    public function getTitle(): string
    {
        return 'My simple admin page';
    }

    /**
     * @return string
     * @throws NamespaceNotRegistered
     * @throws TemplateNotFound
     */
    public function render(): string
    {
        return Template::render('ExamplePlugin/simpleTemplate', [
            'page' => 'SimpleMenuPage'
        ]);
    }
}
