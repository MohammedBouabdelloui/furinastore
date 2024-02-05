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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 255)->unique();
            $table->string('phone_number');
            $table->date('birth_date');
            $table->enum('gender', ['ذكر', 'أنثى']);
            $table->string('user_instagram');
            $table->string('has_whatsapp');
            $table->string('user_facebook');
            $table->string('user_twitter');
            $table->enum('account_status', ['banned', 'active', 'inactive', 'unconfirmed']);
            $table->string('profile_picture')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
