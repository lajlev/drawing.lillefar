<?php

namespace Database\Factories;

use App\Models\Drawing;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrawingFactory extends Factory
{
    protected $model = Drawing::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 9),
            'challenge_id' => $this->faker->numberBetween($min = 1, $max = 9),
            'title' => $this->faker->sentence(3),
            'image_path' => $this->faker->image(public_path('images'),400,300, null, false)
        ];
    }
}
