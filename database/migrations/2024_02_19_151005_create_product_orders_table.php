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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('ordered_item_id')->nullable();
            $table->string('ordered_table_type')->nullable();

            $table->enum('server', ['europe', 'america', 'asia']);
            $table->unsignedBigInteger('genshin_account_id');
            $table->integer('quantity_chosen');
            $table->double('price');
            $table->integer('value_chosen');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
