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

        $proc1 = Ale\Process::create([
            'description' => 'ELECCIONES REGIONALES DE PRESIDENTES Y VICEPRESIDENTES 2010 - SEGUNDA ELECCION',
            'alias' => 'ER2010-2V',
            'date_begin' => '2010-04-05',
            'date_end' => '2010-06-05',
            'status' => 'inactive',
            'user_id' => 1
        ]);

        Ale\Election::create([
            'description' => 'ELECCIONES REGIONALES DE PRESIDENTES - SEGUNDA ELECCION',
            'alias' => 'ER2010',
            'count_votes' => '1',
            'date' => '2010-06-05',
            'process_id' => $proc1->id
        ]);

        Ale\Election::create([
            'description' => 'ELECCIONES REGIONALES DE VICEPRESIDENTES - SEGUNDA ELECCION',
            'alias' => 'ERV2010-2V',
            'count_votes' => '1',
            'date' => '2010-06-05',
            'process_id' => $proc1->id
        ]);

        $proc2 = Ale\Process::create([
            'description' => 'ELECCIONES MUNICIPALES COMPLEMENTARIAS 2012',
            'alias' => 'EMC2012',
            'date_begin' => '2012-04-05',
            'date_end' => '2012-06-05',
            'status' => 'inactive',
            'user_id' => 1
        ]);

        Ale\Election::create([
            'description' => 'ELECCIONES MUNICIPALES COMPLEMENTARIAS 2012',
            'alias' => 'EMC2012',
            'count_votes' => '1',
            'date' => '2012-06-05',
            'process_id' => $proc2->id
        ]);

        $proc3 = Ale\Process::create([
            'description' => 'NUEVAS ELECCIONES MUNICIPALES Y SEGUNDA CONSULTA POPULAR DE REVOCATORIA DEL MANDATO DE AUTORIDADES MUNICIPALES DE JULIO 2013',
            'alias' => 'NEM-CPRJulio2013',
            'date_begin' => '2013-04-05',
            'date_end' => '2013-06-05',
            'status' => 'inactive',
            'user_id' => 1
        ]);

        Ale\Election::create([
            'description' => 'NUEVAS ELECCIONES MUNICIPALES 2013',
            'alias' => 'NEM',
            'count_votes' => '1',
            'date' => '2013-06-05',
            'process_id' => $proc3->id
        ]);

        Ale\Election::create([
            'description' => 'SEGUNDA CONSULTA POPULAR DE REVOCATORIA DEL MANDATO DE AUTORIDADES MUNICIPALES DE JULIO 2013',
            'alias' => 'CPR',
            'count_votes' => '1',
            'date' => '2013-06-05',
            'process_id' => $proc3->id
        ]);

        $proc4 = Ale\Process::create([
            'description' => 'ELECCIONES DEL COLEGIO DE ABOGADOS DE LIMA',
            'alias' => 'CAL',
            'date_begin' => '2015-06-05',
            'date_end' => '2015-11-05',
            'user_id' => 1
        ]);

        Ale\Election::create([
            'description' => 'ELECCIONES DEL COLEGIO DE ABOGADOS DE LIMA',
            'alias' => 'CAL',
            'count_votes' => '1',
            'date' => '2015-11-05',
            'process_id' => $proc4->id
        ]);
    }

}
