<?php

use App\Models\Dashboard\Sidebar;
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
        Schema::create('sidebar', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('route')->nullable();
        $table->enum('status', Sidebar::STATUS)->default('Active');
        $table->integer('order');
        $table->unsignedBigInteger('parent_id')->nullable();
        $table->string('icon')->nullable();
         $table->foreign('parent_id')->references('id')->on('sidebar')->onUpdate('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidebar');
    }
};
