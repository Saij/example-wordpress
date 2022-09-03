<?php

namespace VAF\ExamplePlugin\SettingGroups\FirstSettingsGroup;

use VAF\WP\Library\Settings\TextSetting;
use VAF\WP\Library\Validators\RequiredValidator;

class FirstSetting extends TextSetting
{
    public function getSlug(): string
    {
        return 'first-setting';
    }

    public function getTitle(): string
    {
        return 'First Setting';
    }

    protected function getValidators(): array
    {
        return [
            RequiredValidator::class
        ];
    }

    protected function getValidatorMessage(string $validator): ?string
    {
        if ($validator == RequiredValidator::class) {
            return 'Bitte geben Sie einen Wert für das Feld "Second Setting" ein!';
        }

        return null;
    }
}
