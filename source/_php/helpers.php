<?php

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

if (! function_exists('foobar')) {
    /**
     * Returns 'foobar'.
     */
    function foobar(): string {
        return 'foobar';
    }
}

if (! function_exists('carbon')) {
    function carbon($value): CarbonInterface
    {
        return CarbonImmutable::createFromTimestamp($value);
    }
}
