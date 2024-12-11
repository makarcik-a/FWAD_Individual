<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();  // Идентификатор (primary key)
            $table->string('Name');  // Название подписки
            $table->enum('Type', ['cinema', 'music', 'games', 'other']);  // Тип подписки
            $table->string('Logo');  // Логотип подписки (URL или путь)
            $table->string('Duration');  // Продолжительность подписки
            $table->decimal('Price', 8, 2);  // Цена подписки
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
