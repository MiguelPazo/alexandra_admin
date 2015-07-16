<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Ale\TypeAgrupol;
use Ale\Agrupol;

class AgrupolSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Agrupol::truncate();

        Agrupol::create([
            'code' => '00000022',
            'description' => 'MOVIMIENTO REGIONAL AMAZONENSE UNIDOS AL CAMPO',
        ]);
        Agrupol::create([
            'code' => '00000023',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL CAMBIO UCAYALINO',
        ]);
        Agrupol::create([
            'code' => '00000024',
            'description' => 'MOVIMIENTO REGIONAL EL MAICITO',
        ]);
        Agrupol::create([
            'code' => '00000025',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL AYLLU',
        ]);
        Agrupol::create([
            'code' => '00000026',
            'description' => 'MOVIMIENTO INTEGRACION LORETANA',
        ]);
        Agrupol::create([
            'code' => '00000027',
            'description' => 'FUERZA COMUNAL',
        ]);
        Agrupol::create([
            'code' => '00000028',
            'description' => 'UCAYALI REGION CON FUTURO',
        ]);
        Agrupol::create([
            'code' => '00000029',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL RIO SANTA CAUDALOSO',
        ]);
        Agrupol::create([
            'code' => '00000030',
            'description' => 'MOVIMIENTO REGIONAL OBRAS POR LA MODERNIDAD',
        ]);
        Agrupol::create([
            'code' => '00000031',
            'description' => 'FUERZA REGIONAL',
        ]);
        Agrupol::create([
            'code' => '00000032',
            'description' => 'RESTAURACION NACIONAL',
        ]);
        Agrupol::create([
            'code' => '00000033',
            'description' => 'ALIANZA PARA EL PROGRESO',
        ]);

    }

}
