<?php

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

if (! function_exists('foobar')) {
    /**
     * Return 'foobar'.
     */
    function foobar(): string {
        return 'foobar';
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a CarbonImmutable object from timestamp.
     */
    function carbon($value): CarbonInterface
    {
        return CarbonImmutable::createFromTimestamp($value);
    }
}

if (! function_exists('spaceToNbsp')) {
    /**
     * Convert all spaces in a string to non-breaking spaces.
     */
    function spaceToNbsp(string $string): string
    {
        return str_replace(' ', "\xc2\xa0", $string);
    }
}
