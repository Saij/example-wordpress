<?php

namespace VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup;

use VAF\WP\Library\Settings\TextSetting;
use VAF\WP\Library\Validators\NumericValidator;

class OnlyNumbersAllowed extends TextSetting
{
    public function getSlug(): string
    {
        return 'only-numbers';
    }

    public function getTitle(): string
    {
        return 'Only Numbers';
    }

    protected function serialize($value): ?string
    {
        if (!is_numeric($value)) {
            return null;
        }

        return strval($value);
    }

    protected function deserialize($value)
    {
        if (!is_numeric($value)) {
            return '';
        }

        return intval($value);
    }

    protected function getValidators(): array
    {
        return [
            NumericValidator::class
        ];
    }
}
