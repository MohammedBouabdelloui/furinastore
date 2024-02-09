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
            $table->foreignId('country_id')->constrained()->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 255)->unique();
            $table->string('phone_number')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['ذكر', 'أنثى'])->nullable();
            $table->string('user_instagram')->nullable();
            $table->string('has_whatsapp')->nullable();
            $table->string('user_facebook')->nullable();
            $table->string('user_twitter')->nullable();
            $table->enum('account_status', ['banned', 'active', 'inactive', 'unconfirmed'])->default('unconfirmed');
            $table->string('confirmation_code')->nullable();
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
