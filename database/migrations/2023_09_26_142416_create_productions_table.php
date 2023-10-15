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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('production_date');
            $table->integer('yarndyeing');
            $table->integer('warping');
            $table->integer('sizing');
            $table->integer('weaving');
            $table->integer('pretreatment');
            $table->integer('pretreatment_others');
            $table->integer('thermosol');
            $table->integer('thermosol_others');
            $table->integer('cpb');
            $table->integer('cpb_others');
            $table->integer('custic_padding');
            $table->integer('yd_correction');
            $table->integer('jigger');
            $table->integer('jigger_others');
            $table->integer('padsteam_sd');
            $table->integer('padsteam_sd_others');
            $table->integer('washing3_goller_sd');
            $table->integer('washing3_goller_sd_others');
            $table->integer('softflow_woven');
            $table->integer('softflow_woven_others');
            $table->integer('softflow_knit');
            $table->integer('softflow_knit_others');
            $table->integer('final_inspection');
            $table->integer('final_inspection_others');
            $table->integer('greige_inspection');
            $table->integer('greige_inspection_outparty');
            $table->integer('yd_outparty_mm');
            $table->integer('yd_outparty_mm_total_month');
            $table->integer('printing_knit_mm');
            $table->integer('printing_knit_mm_total_month');
            $table->integer('printing_woven_mm');
            $table->integer('printing_woven_mm_total_month');
            $table->integer('fabric_delivery_mm');
            $table->integer('fabric_delivery_mm_total_month');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productions');
    }
};
