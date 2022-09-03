<?php

namespace VAF\ExamplePlugin\SettingGroups;

use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\FirstSetting;
use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\OnlyNumbersAllowed;
use VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup\SecondSetting;
use VAF\WP\Library\Settings\SettingsGroup;

class FirstSettingsGroup extends SettingsGroup
{
    public function getSlug(): string
    {
        return 'first-group';
    }

    public function getTitle(): string
    {
        return 'First Settings Group';
    }

    public function getDescription(): string
    {
        return 'A first example settings group';
    }

    protected function getSettingsToRegister(): array
    {
        return [
            FirstSetting::class,
            SecondSetting::class,
            OnlyNumbersAllowed::class
        ];
    }
}
