<?php

namespace VAF\WP\TestPlugin\Hooks;

use JetBrains\PhpStorm\NoReturn;
use VAF\WP\Library\Hook\Attribute\AsHookContainer;
use VAF\WP\Library\Hook\Attribute\Hook;

#[AsHookContainer]
class TestHook
{
    #[Hook(hook: 'the_content')]
    public function contentHandler(string $content): string
    {
        return '<p>FooBar Test Hook</p>' . $content;
    }
}
