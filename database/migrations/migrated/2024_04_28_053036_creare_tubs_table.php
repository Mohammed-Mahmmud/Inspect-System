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
        Schema::create('tubs', function (Blueprint $table) {
            $table->id();
            $table->string('report_num')->nullable();
            $table->string('customer')->nullable();
            $table->string('order')->nullable();
            $table->string('location')->nullable();
            $table->string('order_num')->nullable();
            $table->date('date')->nullable();
            $table->longText('remarks')->nullable();
            $table->string('type');
            $table->json('magnetizing');
            $table->json('magnetic_particles');
            $table->json('other_methods');
            $table->json('specification');
            $table->json('equipment');
            $table->longText('tool_desc')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('pin_conn')->nullable();
            $table->string('box_conn')->nullable();
            $table->json('conn_inspected')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('accept')->nullable();
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
