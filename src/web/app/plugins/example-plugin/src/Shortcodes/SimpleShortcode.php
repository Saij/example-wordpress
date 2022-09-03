<?php

namespace VAF\ExamplePlugin\Shortcodes;

use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\FirstSetting;
use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\OnlyNumbersAllowed;
use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\SecondSetting;
use VAF\WP\Library\Shortcodes\Shortcode;
use VAF\WP\Library\Template;

class SimpleShortcode extends Shortcode
{
    /**
     * @inheritDoc
     */
    public function getShortcode(): string
    {
        return 'simple-shortcode';
    }

    /**
     * @inheritDoc
     */
    public function handle(array $attributes, ?string $content = null): string
    {
        return Template::render('ExamplePlugin/SimpleShortcode', [
            'firstSetting' => FirstSetting::getValue(),
            'secondSetting' => SecondSetting::getValue(),
            'numbersOnly' => OnlyNumbersAllowed::getValue()
        ]);
    }

    /**
     * @inheritDoc
     */
    protected function getAttributes(): array
    {
        return [];
    }
}