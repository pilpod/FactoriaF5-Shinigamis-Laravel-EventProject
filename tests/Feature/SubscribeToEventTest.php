<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Event;
use App\Models\User;
use Tests\TestCase;

class SubscribeToEventTest extends TestCase
{   
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_btn_subscribe_send_id_event()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();
        $eventID = $event->id;

        $userView = $this->actingAs($user)
            ->post(route('subscribe', $event->id));
        $userView->assertViewHas($event->title);
        
    }
}
