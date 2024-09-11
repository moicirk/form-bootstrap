<?php

namespace Moicirk\FormBootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class FormBootstrap extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'formbootstrap';
    }
}
