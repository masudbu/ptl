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
            $table->integer('bleaching')->after('pretreatment_others');
            $table->integer('bleaching_others')->after('pretreatment_others');
            $table->integer('mercerize')->after('pretreatment_others');
            $table->integer('mercerize_others')->after('pretreatment_others');
            $table->integer('padsteam_pretreatment')->after('pretreatment_others');
            $table->integer('padsteam_pretreatment_others')->after('pretreatment_others');
            $table->string('updated_by')->after('fabric_delivery_mm_total_month');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->dropColumn('bleaching');
            $table->dropColumn('bleaching_others');
            $table->dropColumn('mercerize');
            $table->dropColumn('mercerize_others');
            $table->dropColumn('padsteam_pretreatment');
            $table->dropColumn('padsteam_pretreatment_others');
            $table->dropColumn('updated_by');
        });
    }
};
