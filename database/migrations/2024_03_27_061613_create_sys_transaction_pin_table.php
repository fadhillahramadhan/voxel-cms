<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_transaction_pin', function (Blueprint $table) {
            $table->increments('transaction_pin_id');
            $table->string('transaction_pin_code', 20);
            $table->unsignedInteger('transaction_pin_parent_member_id');
            $table->unsignedInteger('transaction_pin_total_pin')->default(0)->comment('admin_id atau member_id');
            $table->unsignedInteger('transaction_pin_total_price')->default(0);
            $table->enum('transaction_pin_status', ['menunggu', 'sukses', 'ditolak'])->default('menunggu');
            $table->dateTime('transaction_pin_datetime');
            $table->dateTime('transaction_pin_status_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_transaction_pin');
    }
};
