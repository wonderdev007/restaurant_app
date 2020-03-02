<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => '100% beef patty, with onions, pickles, mustard and tomato ketchup, in a soft bun.',
            'image_url' => '/img/menu/burger.png',
            'price' => 9.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => '100% beef patty, with onions, pickles, mustard and tomato ketchup, in a soft bun.',
            'image_url' => '/img/menu/burger.png',
            'price' => 6.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Basic Burger',
            'description' => '100% beef patty, with onions, pickles, mustard and tomato ketchup, in a soft bun.',
            'image_url' => '/img/menu/burger.png',
            'price' => 4.99,
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
