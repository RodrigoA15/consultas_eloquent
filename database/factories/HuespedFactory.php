<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HuespedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastname(),
            'telefono' => $this->faker->phonenumber(),
            'correo' => $this->faker->email(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'pais' => $this->faker->country(),
            

        ];
    }
}
