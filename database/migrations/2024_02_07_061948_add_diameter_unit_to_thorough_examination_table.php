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
        Schema::table('thorough_examination', function (Blueprint $table) {
            $table->string('diameter_unit')->nullable();
            $table->string('length_unit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('thorough_examination', function (Blueprint $table) {
            //
        });
    }
};