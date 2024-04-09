<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_get_the_message_through_a_view()
    {
        $this->withoutExceptionHandling();
        $this->get('example-route')->assertViewIs('custom-package::home');
    }
}
