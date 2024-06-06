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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('report_num')->nullable();
            $table->string('work_order')->nullable();
            $table->string('status')->nullable();
            $table->date('st_date')->nullable();
            $table->date('fin_date')->nullable();
            $table->string('spec')->nullable();
            $table->string('procedure')->nullable();
            $table->string('type')->nullable();
            $table->json('methods')->nullable();
            $table->string('summary')->nullable();
            $table->unsignedBigInteger('accept')->nullable();
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
        Schema::dropIfExists('tools');
    }
};
