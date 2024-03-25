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
        Schema::create('pizza_order', function (Blueprint $table) {
            $table->foreignId('Pizza_Id')->references('PizzaId')->on('pizza')->onDelete('cascade');
            $table->foreignId('Order_Id')->references('id')->on('orders')->onDelete('cascade');
            $table->primary(['Pizza_Id', 'Order_Id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizza_order');

    }
};