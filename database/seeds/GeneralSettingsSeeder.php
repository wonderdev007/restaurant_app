<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Food Circle',
            'logo_image_url' => 'img/logo.png',
            'address_1' => '23 Change Alley',
            'address_2' => '',
            'city' => 'London',
            'postcode' => 'EC9V 9AY',
            'phone_number' => '020 7946 0800',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
