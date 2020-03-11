<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'FoodCircle is a British multinational chain of hamburger fast food restaurants. Headquartered in the unincorporated area of Cornwall County, the company was founded in 1953 as Insta-Burger, a London–based restaurant chain.',
            'keywords' => 'Burgers, Local Burger, FoodCircle Burger, Salads, Best Burgers in Town',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
