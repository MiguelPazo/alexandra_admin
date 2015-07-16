<?php

use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ale\Process::truncate();
        \Ale\Election::truncate();

        $oProcess = Ale\Process::create([
            'description' => 'ELECCIONES DEL COLEGIO DE ABOGADOS DE LIMA',
            'alias' => 'CAL',
            'date_begin' => '2015-11-05 08:00:00',
            'date_end' => '2015-11-05 16:00:00',
        ]);

        Ale\Election::create([
            'code' => '01',
            'description' => 'ELECCIÓN DE PRESIDENTE',
            'alias' => 'CAL1'
        ]);
        Ale\Election::create([
            'code' => '02',
            'description' => 'ELECCIÓN DE SECRETARIO',
            'alias' => 'CAL2',
        ]);
        Ale\Election::create([
            'code' => '03',
            'description' => 'ELECCIÓN DE TERCER MIEMBRO',
            'alias' => 'CAL3',
        ]);
        Ale\Election::create([
            'code' => '04',
            'description' => 'ELECCIÓN DE CUARTO MIEMBRO',
            'alias' => 'CAL4',
        ]);
    }

}
