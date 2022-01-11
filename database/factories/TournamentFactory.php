<?php

namespace Database\Factories;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ['H', 'M'];
        $category = ['Alevines', 'Infantiles', 'Cadetes', 'Juveniles'];
        return [
            'name' => $this->faker->lastName(),
            'gender' => $gender[rand(0, 1)],
            'category' => $category[rand(0, 3)],
            'startofseason' => $this->faker->date(),
            'endofseason' => $this->faker->date(),
            'league_id' => League::all()->random()->id
        ];
    }
}
