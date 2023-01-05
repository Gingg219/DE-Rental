<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'birth_date'=>$this->faker->date(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password(),
            'address'=>$this->faker->address(),
            'gender'=>$this->faker->boolean(),
            'avatar'=>$this->faker->imageUrl(),
            'phone'=>$this->faker->phoneNumber(),
            'role'=>$this->faker->numberBetween(0,2),
        ];
    }
}
