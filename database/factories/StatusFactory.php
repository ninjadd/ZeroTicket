<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Status::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;

        return [
            'sort_order' => $order++,
            'name' => $this->faker->unique()->randomElement(['Open', 'Closed', 'Cancelled', 'Oops', 'Pending'])
        ];
    }
}
