<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('UserSeeder');
        $this->call('ProcessSeeder');
//        $this->call('VoterSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
