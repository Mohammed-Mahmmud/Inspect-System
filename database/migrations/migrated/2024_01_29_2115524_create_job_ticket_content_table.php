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
        Schema::create('job_ticket_content', function (Blueprint $table) {
            $table->id();
            $table->string('main_description')->nullable();
            $table->string('contract_code')->nullable();
            $table->string('quantity')->nullable();
            $table->string('description')->nullable();
            $table->string('od_size')->nullable();
            $table->string('range')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('total_price')->nullable();
            $table->unsignedBigInteger('jobTicket_id'); // Use the same data type
            $table->foreign('job_ticket_id')->references('id')->on('job_ticket')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_ticket_content');
    }
};