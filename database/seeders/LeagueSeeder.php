<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Stage;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leagues = League::factory(30)->create();
        foreach ($leagues as $league) {
            $stages = Stage::factory(rand(1, 3))->create();
            foreach ($stages as $stage) {
                $league->stages()->attach($stage);
            }
        }
    }
}
