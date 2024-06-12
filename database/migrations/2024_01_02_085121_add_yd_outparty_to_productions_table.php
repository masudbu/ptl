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
            $table->integer('yarndyeing_outparty')->after('yarndyeing')->nullable();
            $table->integer('weaving_outsite')->after('weaving')->nullable();
            $table->integer('fabric_delivery_yd')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_sd')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_yd_print')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_sd_print')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_compensation')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_local_order')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_garment_back')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_erp_bulk')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_erp_adjust_sample')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('fabric_delivery_erp_pp_sample')->after('fabric_delivery_mm_commission')->nullable();
            $table->integer('aop_flatbed_print_knit')->after('softflow_knit_others')->nullable();
            $table->integer('aop_rotary_print_knit')->after('softflow_knit_others')->nullable();
            $table->integer('aop_digital_print_knit')->after('softflow_knit_others')->nullable();
            $table->integer('aop_flatbed_print_woven')->after('softflow_knit_others')->nullable();
            $table->integer('aop_rotary_print_woven')->after('softflow_knit_others')->nullable();
            $table->integer('aop_digital_print_woven')->after('softflow_knit_others')->nullable();
            $table->integer('aop_rotary_baby_knit')->after('softflow_knit_others')->nullable();
            $table->integer('aop_rotary_baby_woven')->after('softflow_knit_others')->nullable();
            $table->integer('softflow_knit_delivery_grey')->after('softflow_knit_others')->nullable();
            $table->integer('softflow_knit_delivery_finish')->after('softflow_knit_others')->nullable();
            $table->string('note',255)->after('fabric_delivery_mm_total_month')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productions', function (Blueprint $table) {
           $table->dropColumn('yarndyeing_outparty');
           $table->dropColumn('weaving_outsite');
           $table->dropColumn('fabric_delivery_yd');
           $table->dropColumn('fabric_delivery_sd');
           $table->dropColumn('fabric_delivery_yd_print');
           $table->dropColumn('fabric_delivery_sd_print');
           $table->dropColumn('fabric_delivery_compensation');
           $table->dropColumn('fabric_delivery_local_order');
           $table->dropColumn('fabric_delivery_garment_back');
           $table->dropColumn('fabric_delivery_erp_bulk');
           $table->dropColumn('fabric_delivery_erp_adjust_sample');
           $table->dropColumn('fabric_delivery_erp_pp_sample');
           $table->dropColumn('aop_flatbed_print_knit');
           $table->dropColumn('aop_rotary_print_knit');
           $table->dropColumn('aop_digital_print_knit');
           $table->dropColumn('aop_flatbed_print_woven');
           $table->dropColumn('aop_rotary_print_woven');
           $table->dropColumn('aop_digital_print_woven');
           $table->dropColumn('aop_rotary_baby_knit');
           $table->dropColumn('aop_rotary_baby_woven');
           $table->dropColumn('softflow_knit_delivery_grey');
           $table->dropColumn('softflow_knit_delivery_finish');
           $table->dropColumn('note');
        });
    }
};
