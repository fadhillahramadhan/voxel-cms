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
        Schema::create('sys_netgrow_wait', function (Blueprint $table) {
            $table->unsignedInteger('netgrow_wait_member_id')->primary()->comment('ID Member');
            $table->unsignedInteger('netgrow_wait_parent_member_id');
            $table->unsignedInteger('netgrow_wait_left')->default(0)->comment('Poin Menunggu Kiri (Realtime)');
            $table->unsignedInteger('netgrow_wait_right')->default(0)->comment('Poin Menunggu Kanan (Realtime)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_wait');
    }
};
