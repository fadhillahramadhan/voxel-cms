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
        Schema::create('sys_bonus_log', function (Blueprint $table) {
            $table->comment('Riwayat bonus');
            $table->increments('bonus_log_id');
            $table->unsignedInteger('bonus_log_parent_member_id')->comment('ID Member Parent');
            $table->unsignedInteger('bonus_log_member_id')->comment('ID Member');
            $table->unsignedInteger('bonus_log_sponsor');
            $table->unsignedInteger('bonus_log_sponsor_gen')->nullable()->default(0);
            $table->unsignedInteger('bonus_log_match');
            $table->unsignedInteger('bonus_log_match_gen')->nullable()->default(0);
            $table->unsignedInteger('bonus_log_cashback');
            $table->date('bonus_log_date')->comment('Tanggal Kejadian');
            $table->dateTime('bonus_log_datetime')->comment('Tanggal Kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_bonus_log');
    }
};
