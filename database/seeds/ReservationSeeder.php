<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,100) as $index){
            DB::table('reservations')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' =>  $faker->email,
                'phone_number' =>  $faker->phoneNumber,
                'guests_total' =>  rand(1,5),
                'reservation_time' => rand(6,10),
                'created_at' =>  $faker->dateTimeThisMonth,
                'updated_at' => $faker->dateTimeThisMonth
            ]);
        }
    }
}
