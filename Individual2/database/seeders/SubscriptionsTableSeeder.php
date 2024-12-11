<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'images/iconSpotify.jpg', 'Duration' => '1 month', 'Price' => 5.88],
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'images/iconSpotify.jpg', 'Duration' => '3 months', 'Price' => 12.49],
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'images/iconSpotify.jpg', 'Duration' => '6 months', 'Price' => 24.99],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'images/iconNetflix.png', 'Duration' => '1 month', 'Price' => 5.99],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'images/iconNetflix.png', 'Duration' => '3 months', 'Price' => 12.49],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'images/iconNetflix.png', 'Duration' => '6 months', 'Price' => 19.99],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'images/iconXBOX.jpg', 'Duration' => '1 month', 'Price' => 9.99],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'images/iconXBOX.jpg', 'Duration' => '3 months', 'Price' => 17.45],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'images/iconXBOX.jpg', 'Duration' => '6 months', 'Price' => 44.99],
            ['Name' => 'PS', 'Type' => 'Games', 'Logo' => 'images/iconPS.jpg', 'Duration' => '1 month', 'Price' => 8.99],
            ['Name' => 'PS', 'Type' => 'Games', 'Logo' => 'images/iconPS.jpg', 'Duration' => '6 months', 'Price' => 24.99],
            ['Name' => 'Apple', 'Type' => 'Other', 'Logo' => 'images/iconApple.jpg', 'Duration' => '1 month', 'Price' => 8.99],
            ['Name' => 'Apple', 'Type' => 'Other', 'Logo' => 'images/iconApple.jpg', 'Duration' => '6 months', 'Price' => 29.99],
            ['Name' => 'KinoPoisk', 'Type' => 'Cinema', 'Logo' => 'images/iconKP.jpg', 'Duration' => '1 month', 'Price' => 5.99],
            ['Name' => 'KinoPoisk', 'Type' => 'Cinema', 'Logo' => 'images/iconKP.jpg', 'Duration' => '3 months', 'Price' => 12.49],
        ]);
    }
}
