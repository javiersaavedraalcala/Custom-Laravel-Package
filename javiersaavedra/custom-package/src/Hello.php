<?php

namespace JavierSaavedra\CustomPackage;

class Hello
{
    protected $name;

    public function hello($name = "Jorge")
    {
        return "Hello {$name}";
    }
}
