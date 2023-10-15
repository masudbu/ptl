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
        Schema::create('yarndyeings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('machine_no');
            $table->string('unload_date');
            $table->string('buyer_name');
            $table->string('order_no');
            $table->string('yp');
            $table->string('batch_no');
            $table->string('yarn_type');
            $table->string('color');
            $table->integer('batch_qty');
            $table->integer('machine_capacity');
            $table->integer('buffer_production');
            $table->string('remarks',255)->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yarndyeings');
    }
};
