<?php

use App\Models\Dashboard\Order;
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
        Schema::table('tubs', function (Blueprint $table) {
            $table->enum('status', Order::STATUS)->default('Open');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tubs', function (Blueprint $table) {
            //
        });
    }
};
