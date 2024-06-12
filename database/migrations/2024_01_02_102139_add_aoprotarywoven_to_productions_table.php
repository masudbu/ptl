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
            $table->integer('aop_flatbed_print_outsite_woven')->after('aop_rotary_baby_woven')->nullable();
            $table->integer('aop_rotary_print_outsite_woven')->after('aop_rotary_baby_woven')->nullable();
            $table->integer('aop_digital_print_outsite_woven')->after('aop_rotary_baby_woven')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productions', function (Blueprint $table) {
             $table->dropColumn('aop_flatbed_print_outsite_woven');
             $table->dropColumn('aop_rotary_print_outsite_woven');
             $table->dropColumn('aop_digital_print_outsite_woven');
        });
    }
};
