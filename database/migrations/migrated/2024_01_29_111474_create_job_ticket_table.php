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
        Schema::create('job_ticket', function (Blueprint $table) {
            $table->id();
            $table->string('work_number')->nullable();
            $table->string('address')->nullable();
            $table->string('ispr')->nullable();
            $table->date('date')->nullable();
            $table->string('well_name')->nullable();
            $table->string('ref_number')->nullable();
            $table->string('job_price')->nullable();
            $table->string('approval')->nullable();
            $table->unsignedBigInteger('user_id'); // Use the same data type
            $table->unsignedBigInteger('order_id'); // Use the same data type
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
        Schema::dropIfExists('job_ticket');
    }
};