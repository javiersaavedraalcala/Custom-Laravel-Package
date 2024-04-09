<?php

namespace JavierSaavedra\CustomPackage\Http\Controllers;

use JavierSaavedra\CustomPackage\Facades\CustomPackage;

class ExampleController
{
    public function __invoke()
    {
        // return CustomPackage::hello('Controller');
        return view('custom-package::home', [
            'message' => CustomPackage::hello()
        ]);
    }
}
