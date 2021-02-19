<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'receiver_id' => $this->faker->numberBetween(1, 100),
            'assigned_id' => $this->faker->numberBetween(0, 100),
            'status_id' => $this->faker->numberBetween(1, 5),
            'priority_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'department_id' => $this->faker->numberBetween(1, 5),
            'subject' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(3),
        ];
    }
}
