<?php

namespace Billaroo\AusDate\Facades;

use Illuminate\Support\Facades\Facade;

class AusDate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'ausdate';
    }
}
