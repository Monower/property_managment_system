<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class WebTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }

    public function test_Property()
    {
        $response = $this->get('property');
        $response->assertStatus(200);
    }
}
