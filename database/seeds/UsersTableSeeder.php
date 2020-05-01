<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'fname' => 'John',
            'lname' => 'Rambo',
            'email' => 'johnrambo@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'Frank',
            'lname' => 'Rambo',
            'email' => 'frankrambo@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $faker = Faker::create();

        foreach(range(1,30) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' =>  $faker->email,
                'password' => Hash::make('password'),
                'created_at' =>  $faker->dateTimeThisMonth,
                'updated_at' => $faker->dateTimeThisMonth
            ]);
        }
    }
}
