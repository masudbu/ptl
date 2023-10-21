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
        Schema::create('production_order', function (Blueprint $table) {
            $table->id();
            $table->string('mkt_reff');
            $table->string('purchase_order');
            $table->string('purchase_order_qty');
            $table->string('dispo_no');
            $table->integer('dispo_finish_qty');
            $table->integer('dispo_grey_qty');
            $table->string('buyer');
            $table->string('garments_name');
            $table->dateTime('dispo_date');
            $table->string('color');
            $table->string('process_type');
            $table->string('construction');
            $table->string('order_type');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_order');
    }
};
