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
            $table->integer('stenter')->after('softflow_knit_others')->nullable();
            $table->integer('stenter_others')->after('softflow_knit_others')->nullable();
            $table->integer('sanforizing')->after('softflow_knit_others')->nullable();
            $table->integer('sanforizing_others')->after('softflow_knit_others')->nullable();
            $table->integer('peach')->after('softflow_knit_others')->nullable();
            $table->integer('peach_others')->after('softflow_knit_others')->nullable();
            $table->integer('airo')->after('softflow_knit_others')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productions', function (Blueprint $table) {
            $table->dropColumn('stenter');
            $table->dropColumn('stenter_others');
            $table->dropColumn('sanforizing');
            $table->dropColumn('sanforizing_others');
            $table->dropColumn('peach');
            $table->dropColumn('peach_others');
            $table->dropColumn('airo');
        });
    }
};
