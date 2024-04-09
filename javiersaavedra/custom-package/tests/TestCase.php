<?php

namespace JavierSaavedra\CustomPackage\Tests;

use JavierSaavedra\CustomPackage\CustomPackageServiceProvider;
use JavierSaavedra\CustomPackage\RouteServiceProvider;
use JavierSaavedra\CustomPackage\Facades\CustomPackage;

class TestCase extends \Orchestra\Testbench\TestCase
{
    
    protected function getPackageProviders($app)
    {
        return [
            CustomPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'CustomPackage' => CustomPackage::class
        ];
    }
}
