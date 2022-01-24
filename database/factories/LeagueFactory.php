<?php

namespace Database\Factories;

use App\Models\Municipality;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

class LeagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $universe = ['Nacional', 'Departamental', 'Provincial', 'Local'];
        $speciality = ['Futbol', 'Futbol 7', 'Futbol 8', 'Futsal'];
        return [
            'name' => 'Liga ' . $this->faker->firstName(),
            'universe' => $universe[rand(0, 3)],
            'membership' => $this->faker->lastName(),
            'user_id' => User::all()->random()->id,
            'speciality_id' => Speciality::all()->random()->id,
            'municipality_id' => Municipality::all()->random()->id,
        ];
    }
}
