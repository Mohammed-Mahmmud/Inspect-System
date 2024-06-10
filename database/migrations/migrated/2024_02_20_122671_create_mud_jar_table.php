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
        Schema::create('mud_jar', function (Blueprint $table) {
            $table->id();
            $table->string('tool')->nullable();
            $table->string('serial')->nullable();
            $table->string('report_num')->nullable();
            $table->date('date')->nullable();
            $table->string('summary')->nullable();
            $table->string('inspect_procedure')->nullable();
           
            $table->json('visual')->nullable();
            $table->json('boroscopic')->nullable();
            $table->json('dimensional')->nullable();
            $table->json('liquid_penetrant')->nullable();
            $table->json('mpi')->nullable();
            $table->json('ultrasonic')->nullable();
            $table->json('eddy_current')->nullable();
            
          
            $table->string('type');
            $table->unsignedBigInteger('accept');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('accept')->references('id')->on('acceptance')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mud_jar');
    }
};