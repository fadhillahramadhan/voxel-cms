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
        Schema::create('sys_netgrow_unilevel', function (Blueprint $table) {
            $table->increments('netgrow_unilevel_id');
            $table->unsignedInteger('netgrow_unilevel_parent_member_id');
            $table->unsignedInteger('netgrow_unilevel_member_id')->comment('ID Member');
            $table->unsignedInteger('netgrow_unilevel_downline_member_id')->comment('ID Member Downline');
            $table->unsignedInteger('netgrow_unilevel_level')->comment('Level Downline ke Member');
            $table->unsignedInteger('netgrow_unilevel_value')->default(0)->comment('Nominal RO');
            $table->decimal('netgrow_unilevel_percent', 7, 4)->unsigned()->default(0)->comment('Persentase dari Nominal RO');
            $table->unsignedInteger('netgrow_unilevel_bonus')->default(0)->comment('Bonus');
            $table->date('netgrow_unilevel_date');
            $table->dateTime('netgrow_unilevel_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_unilevel');
    }
};
