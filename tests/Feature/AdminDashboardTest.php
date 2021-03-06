<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Event;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_simple_user_cannot_access_to_admin_dashboard()
    {
        User::factory()->create();
        $user = User::find(1);

        $response = $this->actingAs($user)
                ->get('/admin');


        $response->assertStatus(302);
    }

    public function test_admin_can_access_to_admin_dashboard()
    {
        User::factory()->create(['is_admin' => true]);
        $user = User::find(1);

        $response = $this->actingAs($user)
                ->get('/admin');


        $response->assertStatus(200);
    }

    public function test_admin_can_delete_event()
    {
        User::factory()->create(['is_admin' => true]);
        Event::factory()->create();
        $user = User::find(1);
        $event = Event::find(1);
        $eventId = $event->id;

        $this->actingAs($user)
            ->delete(route('destroyEvent', ['id' => $eventId]));

        $this->assertDatabaseCount('events', 0);

    }

    /** @test */
    public function test_admin_can_see_form_create_event()
    {
        User::factory()->create(['is_admin' => true]);
        $user = User::find(1);

        $response = $this->actingAs($user)
            ->get(route('createEvent'));

        $response->assertStatus(200)
            ->assertViewIs('eventCreate');
    }

    /** @test */
    public function test_admin_can_create_event()
    {
        $user = User::factory()->create(['is_admin' => true]);

        $event = Event::factory()->make();

        $this->actingAs($user)
             ->post(route('storeEvent'), $event->toArray());

        $this->assertEquals(1, Event::all()->count());
    }
}