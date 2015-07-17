<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Ale\User::truncate();

        Ale\User::create([
            'email' => 'me@miguelpazo.com',
            'password' => \Hash::make('123'),
            'name' => 'Miguel',
            'lastname' => 'Pazo Sánchez',
            'type' => 'admin',
            'last_login' => $faker->date('Y-m-d H:i:s')
        ]);

        foreach (range(1, 10) as $value) {
            Ale\User::create([
                'email' => $faker->unique()->email,
                'password' => \Hash::make('123'),
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'type' => 'operator',
                'last_login' => $faker->dateTimeBetween('-45 years', '-15 years')
                    ->format('Y-m-d H:i:s')
            ]);
        }
    }

}
