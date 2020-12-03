<?php

namespace Tests\Feature\Dashboard;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Event;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_can_I_view_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200)
            ->assertSee('email');
    }

    public function test_cannot_access_to_dashboard()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(302);
    }

    public function test_a_user_can_access_to_dashboard()
    {
        //Un usuario
        $user = User::factory()->create();
        //Accede al dash
        $response = $this->actingAs($user)
                        ->get(route('home'));

        $response->assertViewIs('home');
    }

    public function test_user_is_not_admin()
    {
        //El usuario
        $user = User::factory()->create();
        //comprobar que el usuario no es admin
        $response = $user->isAdmin;
        //Assert
        $this->assertEquals(false, $response);
    }

    public function test_user_can_show_is_events_in_dashboard()
    {
        // $this->withoutExceptionHandling();
        // El usuario y sus eventos
        User::factory()
                    ->has(Event::factory()->count(3), 'events')
                    ->create();
        $user = User::find(1);
        $eventsUser = $user->events()->get();

        //Autentificar usuario
        $authUser = $this->actingAs($user)
                    ->get(route('home'));

        //Comprobar eventos mostrados
        $authUser->assertStatus(200)
            ->assertViewHas('events', $eventsUser);
    }
}
