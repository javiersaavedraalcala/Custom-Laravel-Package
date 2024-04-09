<?php

namespace JavierSaavedra\CustomPackage\Facades;

use Illuminate\Support\Facades\Facade;

class CustomPackage extends Facade
{
    protected static function getFacadeAccessor() 
    {
        return 'custom-package';
    }
}
