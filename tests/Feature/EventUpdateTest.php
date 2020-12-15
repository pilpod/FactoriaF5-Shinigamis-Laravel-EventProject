<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Event;
use PhpParser\Node\Expr\FuncCall;
use Tests\TestCase;

class EventUpdateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_see_view_form()
    {
        $user = User::factory()->create(['is_admin'=>true]);
        $event = Event::factory()->create();
        $response = $this->actingAs($user)
         ->get('/admin/event/'.$event->id.'/edit');

        $response->assertStatus(200)
         ->assertViewIs('eventEdit');
    }

    public function test_admin_can_update_an_event()
    {
        $event = Event::factory()->create();
        $user = User::factory()->create(['is_admin'=>true]);

        $event->title = 'new title';

        $this->actingAs($user)
            ->put(route('updateEvent', $event), $event->toArray());              

        $this->assertDatabaseHas('events', ['id' => $event->id, 'title' => 'new title']);
    }

}
