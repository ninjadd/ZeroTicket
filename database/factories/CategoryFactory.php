<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

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
            'name' => $this->faker->unique()->randomElement(['Client Concern', 'New Feature', 'User Concern', 'New Account', 'Bug'])
        ];
    }
}
