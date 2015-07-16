<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class VoterSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $process = Ale\Process::status('active')->first();
        $idProcess = $process->id;
        $arrGender = ['male', 'female'];


        Ale\Voter::truncate();

        foreach (range(1, 10) as $value) {
            $userName = $faker->userName;
            $order = array_rand(['male', 'female'], 1);
            $name = ($order == 0) ? $faker->firstNameMale : $faker->firstNameFemale;

            Ale\Voter::create([
                'num_ele' => str_pad($faker->unique()->randomNumber(8), 8, "0", STR_PAD_LEFT),
                'name' => $name,
                'lastname_first' => $faker->lastName,
                'lastname_second' => $faker->lastName,
                'pin' => $faker->randomNumber(6),
                'birthdate' => $faker->date($format = 'Y-m-d', $max = '-20 years'),
                'gender' => $arrGender[$order],
                'address' => $faker->address,
                'phone' => $faker->randomNumber(7),
                'cellphone' => $faker->randomNumber(9),
                'email' => $faker->email,
            ]);
        }
    }

}
