<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->sentence(4),
            'img' => $this->faker->imageUrl(640, 480, 'cats'),
            'short_description' => $this->faker->sentence(8),
            'long_description' => $this->faker->sentence (15),
            'event_date' => $this->faker->dateTimeBetween('-60 days', '+90 days'),
            'capacity' => $this->faker->numberBetween(15, 100),
            'outstanding' => $this->faker->boolean(50),

        ];
    }
}
