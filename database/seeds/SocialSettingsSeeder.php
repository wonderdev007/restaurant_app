<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/',
            'twitter_url' => 'https://www.twitter.com/',
            'instagram_url' => 'https://www.instagram.com/',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
