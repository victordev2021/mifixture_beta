<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // *********** MUNICIPIOS BENI
        // marban
        Municipality::create([
            'name' => 'Trinidad',
            'province_id' => 1
        ]);
        Municipality::create([
            'name' => 'San Javier',
            'province_id' => 1
        ]);
        // vaca diez
        Municipality::create([
            'name' => 'Riberalta',
            'province_id' => 2
        ]);
        Municipality::create([
            'name' => 'Guayaramerín',
            'province_id' => 2
        ]);
        // j. ballivián
        Municipality::create([
            'name' => 'Reyes',
            'province_id' => 3
        ]);
        Municipality::create([
            'name' => 'San Borja',
            'province_id' => 3
        ]);
        Municipality::create([
            'name' => 'Santa Rosa',
            'province_id' => 3
        ]);
        Municipality::create([
            'name' => 'Rurrenabaque',
            'province_id' => 3
        ]);
        // yacuma
        Municipality::create([
            'name' => 'Santa Ana',
            'province_id' => 4
        ]);
        Municipality::create([
            'name' => 'Exaltación',
            'province_id' => 4
        ]);
        // moxos
        Municipality::create([
            'name' => 'San Ignacio',
            'province_id' => 5
        ]);
        // marban
        Municipality::create([
            'name' => 'Loreto',
            'province_id' => 6
        ]);
        Municipality::create([
            'name' => 'San Andrés',
            'province_id' => 6
        ]);
        // mamoré
        Municipality::create([
            'name' => 'San Joaquín',
            'province_id' => 7
        ]);
        Municipality::create([
            'name' => 'San Ramón',
            'province_id' => 7
        ]);
        Municipality::create([
            'name' => 'Puerto Siles',
            'province_id' => 7
        ]);
        // itenez
        Municipality::create([
            'name' => 'Magdalena',
            'province_id' => 8
        ]);
        Municipality::create([
            'name' => 'Baures',
            'province_id' => 8
        ]);
        Municipality::create([
            'name' => 'Huacaraje',
            'province_id' => 8
        ]);
        // *********** MUNICIPIOS CHUQUISACA
        // oropeza
        Municipality::create([
            'name' => 'Sucre',
            'province_id' => 9
        ]);
        Municipality::create([
            'name' => 'Yotala',
            'province_id' => 9
        ]);
        Municipality::create([
            'name' => 'Poroma',
            'province_id' => 9
        ]);
        // azurduy
        Municipality::create([
            'name' => 'Villa Azurduy',
            'province_id' => 10
        ]);
        Municipality::create([
            'name' => 'Tarvita',
            'province_id' => 10
        ]);
        // zudañez
        Municipality::create([
            'name' => 'Villa Zudañez',
            'province_id' => 11
        ]);
        Municipality::create([
            'name' => 'Presto',
            'province_id' => 11
        ]);
        Municipality::create([
            'name' => 'Villa Mojocoya',
            'province_id' => 11
        ]);
        Municipality::create([
            'name' => 'Icla',
            'province_id' => 11
        ]);
        // tomina
        Municipality::create([
            'name' => 'Villa Alcalá',
            'province_id' => 12
        ]);
        Municipality::create([
            'name' => 'Padilla',
            'province_id' => 12
        ]);
        Municipality::create([
            'name' => 'Tomina',
            'province_id' => 12
        ]);
        Municipality::create([
            'name' => 'Sopachuy',
            'province_id' => 12
        ]);
        Municipality::create([
            'name' => 'El Villar',
            'province_id' => 12
        ]);
        // hernando siles
        Municipality::create([
            'name' => 'Monteagudo',
            'province_id' => 13
        ]);
        Municipality::create([
            'name' => 'San Pablo de Huacareta',
            'province_id' => 13
        ]);
        // yamparaez
        Municipality::create([
            'name' => 'Tarabuco',
            'province_id' => 14
        ]);
        Municipality::create([
            'name' => 'Yamparáez',
            'province_id' => 14
        ]);
        // nor cinti
        Municipality::create([
            'name' => 'San Lucas',
            'province_id' => 15
        ]);
        Municipality::create([
            'name' => 'Camargo',
            'province_id' => 15
        ]);
        Municipality::create([
            'name' => 'Incahuasi',
            'province_id' => 15
        ]);
        Municipality::create([
            'name' => 'Villa Charcas',
            'province_id' => 15
        ]);
        // sud cinti
        Municipality::create([
            'name' => 'Villa Abecia',
            'province_id' => 16
        ]);
        Municipality::create([
            'name' => 'Culpina',
            'province_id' => 16
        ]);
        Municipality::create([
            'name' => 'Las Carreras',
            'province_id' => 16
        ]);
        // belizario boeto
        Municipality::create([
            'name' => 'Villa Serrano',
            'province_id' => 17
        ]);
        // luis calvo
        Municipality::create([
            'name' => 'Muyupampa',
            'province_id' => 18
        ]);
        Municipality::create([
            'name' => 'Huacaya',
            'province_id' => 18
        ]);
        Municipality::create([
            'name' => 'Macharetí',
            'province_id' => 18
        ]);
    }
}
