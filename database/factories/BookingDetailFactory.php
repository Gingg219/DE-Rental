<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_id'=>Booking::query()->inRandomOrder()->value('id'),
            'product_id'=>Product::query()->inRandomOrder()->value('id'),
            'rent_time'=>$this->faker->date(),
            'rent_date'=>$this->faker->date(),
            'rent_return'=>$this->faker->date(),
            'quantity'=>$this->faker->randomNumber(2, false),
            'price'=>$this->faker->randomNumber(5, true),
        ];
    }
}
