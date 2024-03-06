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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('customer_id')->references('customer_id')->on('customers')->cascadeOnDelete();
            $table->foreignId('pizza_id')->references('pizza_id')->on('pizzas')->cascadeOnDelete();
            $table->integer('total_price')->lenght(4);
            $table->string('message', 250)->nullable();
            $table->string('status_pizza', 40);
            $table->string('status_order', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
