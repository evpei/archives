<?php

namespace Evpei\Archiver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Evpei\Archiver\Archiver
 */
class Archiver extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'archiver';
    }
}
