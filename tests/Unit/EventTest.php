<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Event;

 
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_eventModel_has_title() {

        $event = new Event();
        $result = $event->fillable['title'];
        var_dump($result);
        //$this->assertEquals($result, Null);

    }
}
