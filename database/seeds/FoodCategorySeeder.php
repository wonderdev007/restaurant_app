<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'A well-chosen dinner starter can set the tone for an entire meal. Kick off your meal in style with our chic selection of starters. From soups and salads to scallops and smoked salmon, these elegant dishes are sure to impress.',
            'image_url' => '/img/menu/starter.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'At FoodCircle, we believe in ingredient excellence. From our smashed-to-order burgers and artisan buns, to our tender chicken sandwiches, you can count on fresh and high-quality food.',
            'image_url' => '/img/menu/burger.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Getting dinner on the table is easy with these main dishes and entrées. Recipes from our kitchens professionals are designed to inspire – whether you are eating at us or cooking at home.',
            'image_url' => '/img/menu/entrees.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Choose from: tossed garden salad, grilled veggies, cole slaw, sweet potato fries, baked potato, mashed potatoes, onion rings, french fries and even our own house-made mac and cheese.',
            'image_url' => '/img/menu/salad.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => 'Finish your meal in style with something from the FoodCircle desserts menu; try the new salted caramel arctic slice or the chocolate hazelnut cheesecake, or try an oreo topping, currently very on-trend in desserts.',
            'image_url' => '/img/menu/deserts.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
