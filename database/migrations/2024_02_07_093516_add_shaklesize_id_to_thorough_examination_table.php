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
        $table->unsignedBigInteger('shaklesize_id')->nullable(); // Use the same data type
        $table->foreign('shaklesize_id')->references('id')->on('shakle_size')->onUpdate('cascade');
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