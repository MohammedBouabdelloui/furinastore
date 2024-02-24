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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('title', 255);
            $table->decimal('price', 12, 2);
            $table->string('description', 255);
            $table->boolean('is_available');
            $table->integer('account_level')->min('1')->max('60');
            $table->string('platform');
            $table->enum('server', ['اوروبا', 'أمريكا', 'أسيا']);
            $table->enum('player', ['p2p', 'f2p']);
            $table->string('picture');
            $table->integer('number_sales')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
