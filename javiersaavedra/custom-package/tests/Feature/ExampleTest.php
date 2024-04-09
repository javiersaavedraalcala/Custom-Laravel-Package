<?php

namespace JavierSaavedra\CustomPackage\Tests\Feature;

use JavierSaavedra\CustomPackage\Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_can_get_the_message()
    {
        $this->get('example-route')->assertSuccessful();
    }
}
