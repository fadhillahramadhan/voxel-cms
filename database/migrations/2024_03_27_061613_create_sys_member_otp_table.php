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
        Schema::create('sys_member_otp', function (Blueprint $table) {
            $table->increments('member_otp_id');
            $table->unsignedInteger('member_otp_member_id')->comment('ID Member');
            $table->integer('member_otp_value')->comment('Kode OTP');
            $table->dateTime('member_otp_expired_datetime')->nullable()->comment('Batas Kedaluwarsa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_member_otp');
    }
};
