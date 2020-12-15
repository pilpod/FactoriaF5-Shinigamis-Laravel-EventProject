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
        $event = Event::factory()->create();

        $this->actingAs($user)
            ->post(route('subscribe', $event->id));

        $userEvent = $this->delete(route('unsubscribe', $event->id));

        $userEvent->assertViewIs('unsubscribeResponse')
            ->assertViewHas(['message' => 'Unsubscribe satisfactorio del evento ']);
    }
}
