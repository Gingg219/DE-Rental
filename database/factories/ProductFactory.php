<?php

namespace Database\Factories;

use App\Models\Manufacture;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->bothify('??-#####'),
            'cost/daily'=>$this->faker->randomNumber(5, true),
            'description'=>$this->faker->paragraph(2),
            'specifications'=>$this->faker->paragraph(2),
            'quantity'=>$this->faker->randomNumber(2, false),
            'sold'=>$this->faker->randomNumber(2, false),
            'slug'=>$this->faker->sentence(),
            'manufacture_id' => Manufacture::query()->inRandomOrder()->value('id'),
        ];
    }
}
