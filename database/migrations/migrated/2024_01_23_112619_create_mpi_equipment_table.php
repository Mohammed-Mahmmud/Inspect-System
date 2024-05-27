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
        Schema::create('mpi_equipment', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->string('ac_yoke')->nullable();
            $table->string('ac_yoke_no')->nullable();
            $table->string('dc_coil')->nullable();
            $table->string('dc_coil_no')->nullable();
            $table->string('permanent_magnet')->nullable();
            $table->string('permanent_magnet_no')->nullable();
            $table->string('uv_light')->nullable();
            $table->string('other_equipment')->nullable();
            $table->string('other_equipment_name')->nullable();
            $table->string('other_equipment_no')->nullable();
            $table->timestamps();
        });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpi_equipment');
    }
};
