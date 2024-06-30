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
        Schema::create('tubs_summary', function (Blueprint $table) {
            $table->id();
            $table->string('report_number')->nullable();
            $table->string('customer')->nullable();
            $table->string('order')->nullable();
            $table->string('location')->nullable();
            $table->string('order_num')->nullable();
            $table->date('date')->nullable();
            $table->longText('comments')->nullable();
            $table->json('equipment');
            $table->json('specification');
            $table->string('type');
            $table->json('insp_method');
            $table->longText('tool_desc')->nullable();
            $table->json('dp_summary_details')->nullable();
            $table->string('supervisor')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('accept')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->foreign('accept')->references('id')->on('acceptance')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tubs_summary');
    }
};
