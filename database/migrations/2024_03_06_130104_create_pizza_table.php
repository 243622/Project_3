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
            $table->string('pizzaName', 40);
            $table->integer('pizzaPrice')->lenght(4);
            $table->string('pizzaSize', 25);
            $table->string('pizzaImage', 200);
            $table->foreignId('pizzaIngrediënts_id');
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
