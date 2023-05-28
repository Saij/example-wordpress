<?php

namespace VAF\WP\TestPlugin\Shortcodes;

use VAF\WP\Library\Shortcode\Attribute\AsShortcodeContainer;
use VAF\WP\Library\Shortcode\Attribute\Shortcode;
use VAF\WP\TestPlugin\Plugin;

#[AsShortcodeContainer]
class MyShortcodes
{
    #[Shortcode(tag: 'simple-shortcode')]
    public function simpleShortcode(): string
    {
        return '<p>I AM A SIMPLE SHORTCODE</p>';
    }

    #[Shortcode(tag: 'another-shortcode')]
    public function anotherShortcode(): string
    {
        return '<p>Another shortcode</p>';
    }

    #[Shortcode(tag: 'hello-world')]
    public function helloWorldShortcode(
        Plugin $plugin,
        ?string $name = null,
        bool $goodBye = false,
        int $repeat = 1
    ): string {
        $string = '<p>' . ($goodBye ? 'Goodbye, ' : 'Hello, ') . ($name ?? $plugin->getPluginName()) . '</p>';
        return implode("\n", array_fill(0, $repeat, $string));
    }
}
