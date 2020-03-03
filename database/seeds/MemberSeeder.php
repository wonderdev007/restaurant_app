<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Johny',
            'lname' => 'Cash',
            'email' => 'cash@gmail.com',
            'phone_number' => '21342354235',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('members')->insert([
            'fname' => 'Ted',
            'lname' => 'Kaczynski',
            'email' => 'tjkaczynski@gmail.com',
            'phone_number' => '54342888235',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
