<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

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
            'name' => $this->faker->unique()->randomElement(['Software', 'Business', 'Human Resources', 'Account Management', 'Sales'])
        ];
    }
}
