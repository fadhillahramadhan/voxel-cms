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
        Schema::create('sys_netgrow_sponsor', function (Blueprint $table) {
            $table->comment('data log sponsoring per member per downline per hari');
            $table->bigIncrements('netgrow_sponsor_id');
            $table->unsignedInteger('netgrow_sponsor_member_id')->index('netgrow_sponsor_network_id')->comment('ID Member Sponsor');
            $table->unsignedInteger('netgrow_sponsor_parent_member_id');
            $table->unsignedInteger('netgrow_sponsor_downline_member_id')->comment('ID Member Member Join');
            $table->tinyInteger('netgrow_sponsor_point')->default(0);
            $table->unsignedInteger('netgrow_sponsor_bonus')->comment('Nilai Bonus Sponsor Yang Didapatkan');
            $table->date('netgrow_sponsor_date')->index('netgrow_sponsor_date')->comment('Tanggal Kejadian');
            $table->dateTime('netgrow_sponsor_datetime')->comment('Tanggal Input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_sponsor');
    }
};
