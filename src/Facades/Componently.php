<?php

namespace Ryangurn\Componently\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ryangurn\Componently\Componently
 */
class Componently extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'componently';
    }
}
