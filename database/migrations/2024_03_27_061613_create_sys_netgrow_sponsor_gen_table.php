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
        Schema::create('sys_netgrow_sponsor_gen', function (Blueprint $table) {
            $table->bigIncrements('netgrow_sponsor_gen_id');
            $table->unsignedInteger('netgrow_sponsor_gen_parent_member_id');
            $table->unsignedInteger('netgrow_sponsor_gen_member_id');
            $table->unsignedInteger('netgrow_sponsor_gen_level');
            $table->unsignedInteger('netgrow_sponsor_gen_downline_member_id');
            $table->unsignedTinyInteger('netgrow_sponsor_gen_point')->default(0);
            $table->unsignedInteger('netgrow_sponsor_gen_bonus')->default(0);
            $table->date('netgrow_sponsor_gen_date');
            $table->dateTime('netgrow_sponsor_gen_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_sponsor_gen');
    }
};
