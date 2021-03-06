<?php

namespace Database\Factories;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 101),
            'status_id' => $this->faker->numberBetween(1, 5),
            'priority_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'department_id' => $this->faker->numberBetween(1, 5),
            'subject' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(3)
        ];
    }
}
