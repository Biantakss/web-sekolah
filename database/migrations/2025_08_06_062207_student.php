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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('images')->nullable(); // Added images column
            $table->string('name');
            $table->string('NIS')->unique();
            $table->string('NISN')->unique();
            $table->string('class');
            $table->string('gender');
             $table->enum('extracurricular', [
                'Skateboard',
                'Soccer',
                'BasketBall',
                'Volly',
                'Modern Music',
                'Traditional Music',
                'Traditional Dance',
                'Paskibra',
                'Pramuka'
            ]);
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('parents_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
