<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testRouteHome()
    {
        $response = $this->get('/'); // sustituir por get(route('name given in web.php'));

        $response->assertStatus(200)
        ->assertViewIs('welcome')
        ->assertSee('Hello');
    }

    public function testRouteDashboard()
    {
        $response = $this->get(route('dashboard')); 

        $response->assertStatus(200)
        ->assertViewIs('dashboard')
        ->assertSee('Dashboard');
    }
    
}
