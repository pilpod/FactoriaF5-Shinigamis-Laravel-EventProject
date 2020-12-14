<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(10),
            'picture_path'=> $this->faker->imageUrl(640, 480),
            'short_description'=> $this->faker->sentence(20, false),
            'duration'=> $this->faker->word,
            'description'=> $this->faker->paragraph(),
            'event_date'=> $this->faker->dateTimeBetween('-30 days', '+30 days'),
            'hour' => $this->faker->time('H:00'),
            'event_capacity'=> $this->faker->numberBetween(10, 100),
            'outstanding'=> $this->faker->boolean(false),
        ];
    }
}
