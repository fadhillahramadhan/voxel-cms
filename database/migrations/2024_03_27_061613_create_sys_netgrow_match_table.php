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
        Schema::create('sys_netgrow_match', function (Blueprint $table) {
            $table->bigIncrements('netgrow_match_id');
            $table->unsignedInteger('netgrow_match_parent_member_id');
            $table->unsignedInteger('netgrow_match_member_id')->index('netgrow_match_member_id')->comment('ID Member');
            $table->unsignedInteger('netgrow_match_trigger_member_id');
            $table->unsignedInteger('netgrow_match_bonus')->default(0)->comment('	Nilai Bonus Pasangan	');
            $table->unsignedInteger('netgrow_match_point')->default(0);
            $table->date('netgrow_match_date')->index('netgrow_match_date')->comment('	Tanggal Kejadian');
            $table->dateTime('netgrow_match_datetime')->comment('Tanggal Input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_match');
    }
};
