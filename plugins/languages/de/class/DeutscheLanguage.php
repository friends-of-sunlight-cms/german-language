<?php

namespace SunlightLanguage\De;

use Sunlight\Plugin\LanguagePlugin;

class DeutscheLanguage extends LanguagePlugin
{
    function formatInteger(int $integer): string
    {
        if ($integer > 9999) {
            return parent::formatInteger($integer);
        }

        return sprintf('%d', $integer);
    }

    function formatFloat(float $float, int $decimals): string
    {
        if ($float > 9999) {
            return parent::formatFloat($float, $decimals);
        }

        return number_format($float, $decimals, $this->getOption('decimal_point'), '');
    }
}
