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
        Schema::create('mad_jar_body', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no')->nullable();
            $table->string('description')->nullable();
            $table->string('length')->nullable();
            $table->string('box_thread')->nullable();
            $table->string('box_od')->nullable();
            $table->string('box_cond')->nullable();
            $table->string('body_thread_cond')->nullable();
            $table->string('pin_conn')->nullable();
            $table->string('pin_id')->nullable();
            $table->string('pin_cond')->nullable();
            $table->unsignedBigInteger('mud_jar_id')->nullable();
            $table->foreign('mud_jar_id')->references('id')->on('mud_jar')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mad_jar_body');
    }
};