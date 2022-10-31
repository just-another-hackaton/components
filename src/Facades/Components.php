<?php

namespace Jah\Components\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jah\Components\Components
 */
class Components extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jah\Components\Components::class;
    }
}
