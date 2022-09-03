<?php

namespace VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup;

use VAF\WP\Library\Settings\EnvAwareTextSetting;
use VAF\WP\Library\Validators\RequiredValidator;

class SecondSetting extends EnvAwareTextSetting
{
    public function getSlug(): string
    {
        return 'second-setting';
    }

    public function getTitle(): string
    {
        return 'Second Setting';
    }

    public function getDescription(): string
    {
        return 'A EnvAware Setting';
    }

    protected function getEnvKey(): string
    {
        return 'WORDPRESS_BLOGURL';
    }

    protected function parseEnvValue($value)
    {
        return $value;
    }

    protected function getValidators(): array
    {
        return [
            RequiredValidator::class
        ];
    }
}
