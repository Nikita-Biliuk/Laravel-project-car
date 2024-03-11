<?php

namespace Database\Factories;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'reg_number' => $this->faker->unique()->regexify('[A-Z0-9]{6}'),
            'owner_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
