<?php

namespace SextaNet\LaravelChileGeo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SextaNet\LaravelChileGeo\LaravelChileGeo
 */
class LaravelChileGeo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SextaNet\LaravelChileGeo\LaravelChileGeo::class;
    }
}
