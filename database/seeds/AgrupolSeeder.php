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

        TypeAgrupol::truncate();
        Agrupol::truncate();

        $typeAgrupol = TypeAgrupol::create([
            'description' => 'Agrupación Política'
        ]);

        Agrupol::create([
            'code' => '00000022',
            'description' => 'MOVIMIENTO REGIONAL AMAZONENSE UNIDOS AL CAMPO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000023',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL CAMBIO UCAYALINO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000024',
            'description' => 'MOVIMIENTO REGIONAL EL MAICITO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000025',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL AYLLU',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000026',
            'description' => 'MOVIMIENTO INTEGRACION LORETANA',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000027',
            'description' => 'FUERZA COMUNAL',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000028',
            'description' => 'UCAYALI REGION CON FUTURO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000029',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL RIO SANTA CAUDALOSO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000030',
            'description' => 'MOVIMIENTO REGIONAL OBRAS POR LA MODERNIDAD',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000031',
            'description' => 'FUERZA REGIONAL',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000032',
            'description' => 'RESTAURACION NACIONAL',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '00000033',
            'description' => 'ALIANZA PARA EL PROGRESO',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '80',
            'description' => 'Votos en blanco',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '81',
            'description' => 'Votos nulos',
            'type_agrupol_id' => $typeAgrupol->id
        ]);
        Agrupol::create([
            'code' => '82',
            'description' => 'Votos impugnados',
            'type_agrupol_id' => $typeAgrupol->id
        ]);

    }

}
