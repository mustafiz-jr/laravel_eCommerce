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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->decimal('shipping_cost', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->integer('quantity');
            $table->string('shippping_method')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_id')->nullable();
            $table->integer('view')->nullable()->default(0);
            $table->integer('sale_count')->nullable()->default(0);
            $table->string('short_discription')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->string('keywords')->nullable();
            $table->string('seo_title')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->boolean('featured')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
