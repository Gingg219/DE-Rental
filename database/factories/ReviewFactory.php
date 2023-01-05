<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::query()->inRandomOrder()->value('id'),
            'product_id'=> Product::query()->inRandomOrder()->value('id'),
            'description'=>$this->faker->paragraph(2),
            'date'=>$this->faker->date(),
        ];
    }
}
