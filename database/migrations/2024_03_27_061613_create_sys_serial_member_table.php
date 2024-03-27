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
        Schema::create('sys_serial_member', function (Blueprint $table) {
            $table->comment('Data serial yg dimiliki member');
            $table->char('serial_member_serial_id', 16)->primary();
            $table->char('serial_member_serial_pin', 6);
            $table->char('serial_member_serial_network_code', 12);
            $table->unsignedTinyInteger('serial_member_serial_type_id')->default(0);
            $table->unsignedInteger('serial_member_serial_buyer_member_id')->default(0)->index('serial_member_serial_buyer_member_id');
            $table->dateTime('serial_member_serial_buy_datetime');
            $table->unsignedTinyInteger('serial_member_serial_is_active')->default(0);
            $table->unsignedTinyInteger('serial_member_serial_is_used')->default(0);
            $table->date('serial_member_serial_expired_date')->nullable();
            $table->dateTime('serial_member_serial_used_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_serial_member');
    }
};
