<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tubs', function (Blueprint $table) {
            $table->id();
            $table->string('report_num')->nullable();
            $table->string('order_num')->naullable();
            $table->date('date')->nullable();
            $table->longText('desc')->naullable();
            $table->string('type');
            $table->json('methods')->naullable();
            $table->json('magnetic_particles')->naullable();
            $table->json('equipment')->naullable();
            $table->string('remarks')->naullable();
            $table->string('supervisor')->naullable();
            $table->string('pin_conn')->naullable();
            $table->string('box_conn')->naullable();
            $table->integer('accepted_conn')->naullable();
            $table->integer('defective_conn')->naullable();
            $table->integer('repaired_conn')->naullable();
            $table->integer('total_conn')->naullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('accept')->naullable();
            $table->unsignedBigInteger('order_id');
            $table->foreign('accept')->references('id')->on('acceptance')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
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
