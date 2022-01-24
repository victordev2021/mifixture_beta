<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speciality::create([
            'name' => 'Futbol'
        ]);
        Speciality::create([
            'name' => 'Futsal'
        ]);
        Speciality::create([
            'name' => 'Futbol 7'
        ]);
        Speciality::create([
            'name' => 'Futbol 8'
        ]);
    }
}
