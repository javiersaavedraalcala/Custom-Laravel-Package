<?php

namespace JavierSaavedra\CustomPackage\Tests\Unit;

use CustomPackage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use JavierSaavedra\CustomPackage\Models\Message;
use JavierSaavedra\CustomPackage\Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_returns_the_message()
    {
        $this->assertEquals(
            "Hello Jorge",
            CustomPackage::hello()
        );

        $this->assertEquals(
            "Hello Luis",
            CustomPackage::hello("Luis")
        );
    }
    
    public function test_can_interact_with_models_and_databases()
    {
        $message = new Message;
        $message->content = "Example";
        $message->save();

        $this->assertEquals('Example', Message::first()->content);

    }
}
