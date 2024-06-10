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
        Schema::create('tublar_summary', function (Blueprint $table) {
            $table->id();
            $table->date('st_date');
            $table->date('fin_date');
            $table->string('contract_num')->nullable();
            $table->string('report_num')->nullable();
            $table->string('customer_sign')->naullable();
            $table->string('comments')->naullable();
            $table->string('sheets')->nullable();
            $table->string('work_order')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('conn')->nullable();
            $table->string('summary_type')->nullable();
            $table->string('specification')->nullable();
            $table->string('inspection_type')->nullable();
            $table->string('type');
            $table->json('colour_code');
            $table->json('description');

            $table->unsignedBigInteger('accept')->naullable();
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
        Schema::dropIfExists('tublar_summary');
    }
};
