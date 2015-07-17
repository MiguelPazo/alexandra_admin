<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Ale\Organization;

class OrganizationSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Organization::truncate();

        Organization::create([
            'code' => '00000022',
            'description' => 'MOVIMIENTO REGIONAL AMAZONENSE UNIDOS AL CAMPO',
        ]);
        Organization::create([
            'code' => '00000023',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL CAMBIO UCAYALINO',
        ]);
        Organization::create([
            'code' => '00000024',
            'description' => 'MOVIMIENTO REGIONAL EL MAICITO',
        ]);
        Organization::create([
            'code' => '00000025',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL AYLLU',
        ]);
        Organization::create([
            'code' => '00000026',
            'description' => 'MOVIMIENTO INTEGRACION LORETANA',
        ]);
        Organization::create([
            'code' => '00000027',
            'description' => 'FUERZA COMUNAL',
        ]);
        Organization::create([
            'code' => '00000028',
            'description' => 'UCAYALI REGION CON FUTURO',
        ]);
        Organization::create([
            'code' => '00000029',
            'description' => 'MOVIMIENTO INDEPENDIENTE REGIONAL RIO SANTA CAUDALOSO',
        ]);
        Organization::create([
            'code' => '00000030',
            'description' => 'MOVIMIENTO REGIONAL OBRAS POR LA MODERNIDAD',
        ]);
        Organization::create([
            'code' => '00000031',
            'description' => 'FUERZA REGIONAL',
        ]);
        Organization::create([
            'code' => '00000032',
            'description' => 'RESTAURACION NACIONAL',
        ]);
        Organization::create([
            'code' => '00000033',
            'description' => 'ALIANZA PARA EL PROGRESO',
        ]);

    }

}
