<?php

namespace App;

class Parcel
{
    protected static function resolveFacade(string $name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $args)
    {
        return dd(self::resolveFacade('Parcel')->$method(...$args));
    }
}
