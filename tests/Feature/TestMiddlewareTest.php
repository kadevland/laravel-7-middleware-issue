<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestMiddlewareTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test()
    {
        $response = $this->get(route('test'));
        $response->assertJson(['costum-header' => 'simple']);
    }
}
