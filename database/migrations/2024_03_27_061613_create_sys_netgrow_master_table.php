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
        Schema::create('sys_netgrow_master', function (Blueprint $table) {
            $table->bigIncrements('netgrow_master_id');
            $table->unsignedInteger('netgrow_master_member_id')->index('netgrow_master_network_id')->comment('member_id');
            $table->unsignedInteger('netgrow_master_node_left')->default(0)->comment('total downline kiri');
            $table->unsignedInteger('netgrow_master_node_right')->default(0)->comment('total downline kanan');
            $table->unsignedInteger('netgrow_master_wait_left')->default(0)->comment('titik / point menunggu kiri');
            $table->unsignedInteger('netgrow_master_wait_right')->default(0)->comment('titik / point menunggu kanan');
            $table->unsignedInteger('netgrow_master_match')->default(0)->comment('Jumlah Pasangan Yang Terhitung Sebagai Bonus');
            $table->unsignedInteger('netgrow_master_match_real')->default(0)->comment('jumlah pasangan yang terjadi');
            $table->integer('netgrow_master_match_bonus')->default(0)->comment('total bonus dari pasangan yang terjadi');
            $table->date('netgrow_master_date')->index('netgrow_master_date');
            $table->unsignedInteger('netgrow_master_node_left_node')->comment('total downline kiri');
            $table->unsignedInteger('netgrow_master_node_right_node')->comment('total downline kanan');
            $table->unsignedInteger('netgrow_master_wait_left_node')->comment('total titik menunggu kiri');
            $table->unsignedInteger('netgrow_master_wait_right_node')->comment('total titik menunggu kanan');
            $table->unsignedInteger('netgrow_master_point_left')->default(0)->comment('Pertumbuhan Poin Kiri');
            $table->unsignedInteger('netgrow_master_point_right')->default(0)->comment('Pertumbuhan Poin Kanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_master');
    }
};
