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
        Schema::create('finish_to_final', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('transfer_date');
            $table->string('transfer_type');
            $table->string('order_no');
            $table->string('buyer_name');
            $table->string('construction_name');
            $table->string('order_qty');
            $table->string('order_type');
            $table->string('batch_no');
            $table->string('transfer_qty');
            $table->string('last_process');
            $table->string('last_machine');
            $table->string('batcher_no');
            $table->string('book_no');
            $table->string('req_no')->nullable();
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
        Schema::dropIfExists('finish_to_final');
    }
};
