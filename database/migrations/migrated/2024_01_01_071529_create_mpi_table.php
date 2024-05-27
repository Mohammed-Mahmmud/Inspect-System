<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mpi', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('customer_work_number')->nullable();
            $table->string('extent')->nullable();
            $table->date('date');
            $table->string('report_number')->nullable();
            $table->string('method')->default('Magnetic Particle Inspection');
            $table->string('type')->default('mpi');
            $table->string('description');
            $table->string('serial');
            $table->string('manufacture');
            $table->string('result');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('rig_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpi');
    }
};
