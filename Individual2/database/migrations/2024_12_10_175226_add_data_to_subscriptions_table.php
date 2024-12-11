<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class AddDataToSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Добавляем данные в таблицу subscriptions
        DB::table('subscriptions')->insert([
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'public/images/iconSpotify.jpg', 'Duration' => '1 month', 'Price' => 5.88],
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'public/images/iconSpotify.jpg', 'Duration' => '3 months', 'Price' => 12.49],
            ['Name' => 'Spotify', 'Type' => 'Music', 'Logo' => 'public/images/iconSpotify.jpg', 'Duration' => '6 months', 'Price' => 24.99],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'public/images/iconNetflix.png', 'Duration' => '1 month', 'Price' => 5.99],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'public/images/iconNetflix.png', 'Duration' => '3 months', 'Price' => 12.49],
            ['Name' => 'Netflix', 'Type' => 'Cinema', 'Logo' => 'public/images/iconNetflix.png', 'Duration' => '6 months', 'Price' => 19.99],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'public/images/iconXBOX.jpg', 'Duration' => '1 month', 'Price' => 9.99],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'public/images/iconXBOX.jpg', 'Duration' => '3 months', 'Price' => 17.45],
            ['Name' => 'XBOX', 'Type' => 'Games', 'Logo' => 'public/images/iconXBOX.jpg', 'Duration' => '6 months', 'Price' => 44.99],
            ['Name' => 'PS', 'Type' => 'Games', 'Logo' => 'public/images/iconPS.jpg', 'Duration' => '1 month', 'Price' => 8.99],
            ['Name' => 'PS', 'Type' => 'Games', 'Logo' => 'public/images/iconPS.jpg', 'Duration' => '6 months', 'Price' => 24.99],
            ['Name' => 'Apple', 'Type' => 'Other', 'Logo' => 'public/images/iconApple.jpg', 'Duration' => '1 month', 'Price' => 8.99],
            ['Name' => 'Apple', 'Type' => 'Other', 'Logo' => 'public/images/iconApple.jpg', 'Duration' => '6 months', 'Price' => 29.99],
            ['Name' => 'KinoPoisk', 'Type' => 'Cinema', 'Logo' => 'public/images/iconKP.jpg', 'Duration' => '1 month', 'Price' => 5.99],
            ['Name' => 'KinoPoisk', 'Type' => 'Cinema', 'Logo' => 'public/images/iconKP.jpg', 'Duration' => '3 months', 'Price' => 12.49],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Удаляем данные из таблицы subscriptions
        DB::table('subscriptions')->truncate();
    }
}