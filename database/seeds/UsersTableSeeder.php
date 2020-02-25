<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('users')->insert([
            'fname' => 'Frank',
            'lname' => 'Rambo',
            'email' => 'frankrambo@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
