<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
* @extends Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
*/
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'npr' => $this->faker->name,
            'adresse' => $this->faker->address,

            'email' => $this->faker->unique()->safeEmail,
            
        ];
    }
}
