<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pizza', function (Blueprint $table) {
            $table->id('pizza_id');
            $table->string('name', 40);
            $table->integer('price')->lenght(4);
            $table->string('size', 25);
            $table->string('pizza_image', 200);
            $table->foreignId('ingrediënt_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
