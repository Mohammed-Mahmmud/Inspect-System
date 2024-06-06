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
        Schema::create('checklist', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->tinyInteger('check')->default(0);
            $table->string('comment')->nullable();
            $table->string('type');
            $table->unsignedBigInteger('thorough_examination_id'); // Correct column name
            $table->foreign('thorough_examination_id')->references('id')->on('thorough_examination')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist');
    }
};
