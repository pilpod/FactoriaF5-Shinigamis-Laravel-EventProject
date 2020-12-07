<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class UnsubcribeEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unsuscribe_route()
    {
        $user = User::factory()->create();
        Event::factory()->create();
        $event = Event::find(1);

        $user->events()->attach(1);

        $response = $this->actingAs($user)
                ->get('unsubscribe/' . $event->id);

        $response->assertStatus(200);
    }
}
