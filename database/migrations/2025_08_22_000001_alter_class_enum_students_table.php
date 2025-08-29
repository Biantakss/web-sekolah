<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->enum('class', [
                'X-A', 'X-B', 'X-C',
                'XI-A', 'XI-B', 'XI-C',
                'XII-A', 'XII-B', 'XII-C'
            ])->change();
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('class')->change();
        });
    }
};
