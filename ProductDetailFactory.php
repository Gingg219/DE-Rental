<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=> Product::query()->inRandomOrder()->value('id'),
            'model'=>$this->faker->numerify('MD-####'),
            'status'=>$this->faker->sentence(),
        ];
    }
}
