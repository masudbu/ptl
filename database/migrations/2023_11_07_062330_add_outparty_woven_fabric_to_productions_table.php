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
        Schema::table('productions', function (Blueprint $table) {
            $table->integer('custic_padding_others')->after('custic_padding')->nullable();
            $table->integer('fabric_delivery_mm_others')->after('fabric_delivery_mm')->nullable();
            $table->integer('fabric_delivery_mm_commission')->after('fabric_delivery_mm')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productions', function (Blueprint $table) {
             $table->dropColumn('custic_padding_others');
             $table->dropColumn('fabric_delivery_mm_others');
             $table->dropColumn('fabric_delivery_mm_commission');
        });
    }
};
