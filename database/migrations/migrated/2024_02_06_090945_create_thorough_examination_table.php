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
        Schema::create('thorough_examination', function (Blueprint $table) {
            $table->id();
            $table->date('exam_date'); 
            $table->string('report_number')->nullable(); 
            $table->string('identified_number')->nullable(); 
            $table->string('qty')->nullable(); 
            $table->date('manufature_date')->nullable(); 
            $table->string('swl')->nullable(); 
            $table->date('last_exam_date')->nullable(); 
            $table->string('original_cert_number')->nullable(); 
            $table->date('original_cert_date')->nullable(); 
            $table->string('cert_body_name')->nullable(); 
            $table->string('desc_header')->nullable(); 
            $table->string('desc_content')->nullable(); 
            $table->string('diameter')->nullable(); 
            $table->string('length')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('location')->nullable(); 
            $table->string('type')->nullable(); 
            $table->tinyInteger('first_exam_after')->nullable(); 
            $table->tinyInteger('has_equipment')->nullable(); 
            $table->tinyInteger('interval_month')->nullable(); 
            $table->tinyInteger('interval_year')->nullable(); 
            $table->tinyInteger('exam_scheme')->nullable(); 
            $table->tinyInteger('circumstances')->nullable(); 
            $table->string('defect_note')->nullable(); 
            $table->tinyInteger('accept')->nullable(); 
            $table->tinyInteger('danger')->nullable(); 
            $table->date('danger_date')->nullable(); 
            $table->date('next_exam')->nullable(); 
            $table->string('carried_exam')->nullable(); 
            $table->string('carried_note')->nullable(); 
            $table->tinyInteger('safe_equipment')->nullable(); 
            $table->string('desc_type')->nullable(); 
            $table->string('perfect_note')->nullable();
            $table->string('desc_manufature')->nullable();

            
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
        Schema::dropIfExists('thorough_examination');
    }
};