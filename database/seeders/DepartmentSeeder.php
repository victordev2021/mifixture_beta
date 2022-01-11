<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Beni',
        ]);
        Department::create([
            'name' => 'Chuquisaca',
        ]);
        Department::create([
            'name' => 'Cochabamba',
        ]);
        Department::create([
            'name' => 'La Paz',
        ]);
        Department::create([
            'name' => 'Oruro',
        ]);
        Department::create([
            'name' => 'Pando',
        ]);
        Department::create([
            'name' => 'Potosí',
        ]);
        Department::create([
            'name' => 'Santa Cruz',
        ]);
        Department::create([
            'name' => 'Tarija',
        ]);
    }
}
