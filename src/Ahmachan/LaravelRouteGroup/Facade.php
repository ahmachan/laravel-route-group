<?php namespace Ahmachan\LaravelRouteGroup;

class Facade extends \Illuminate\Support\Facades\Facade
{

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() { return 'laravel-route-group'; }

}
