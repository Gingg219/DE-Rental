<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManufactureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::query()->inRandomOrder()->value('id'),
            'name'=>$this->faker->name(),
            'image'=>$this->faker->imageUrl(),
        ];
    }
}
