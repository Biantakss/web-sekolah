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
        // Buat tabel teachers jika belum ada
        if (!Schema::hasTable('teachers')) {
            Schema::create('teachers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('NIP')->unique();
                $table->string('subject')->nullable();
                $table->string('email')->unique();
                $table->string('Gender')->nullable();
                $table->string('phone_number')->nullable();
                $table->boolean('is_admin')->default(false); // 0 = guru biasa, 1 = admin
                $table->timestamps();
            });
        }
        // Jangan buat Schema::table('teachers', ...) di migration create
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};