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
        Event::factory(1)->create();
        $event = Event::find(1);
        $id = $event->id;

        $response = $this->get('subscribe/' . $id);

        $response->assertStatus(302);
    }
}
