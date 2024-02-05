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
        Schema::create('genshin_account_details', function (Blueprint $table) {
            $table->id();
            $table->string('account_id');
            $table->enum('server', ['اوروبا', 'أمريكا', 'أسيا']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genshin_account_details');
    }
};
