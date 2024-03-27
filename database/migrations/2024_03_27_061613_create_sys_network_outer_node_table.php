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
        Schema::create('sys_network_outer_node', function (Blueprint $table) {
            $table->comment('data titik menunggu realtime (untuk menghitung pasangan secara realtime)');
            $table->unsignedInteger('network_outer_node_member_id')->primary()->comment('ID Member');
            $table->unsignedInteger('network_outer_node_left_member_id')->comment('Titik Terluar Posisi Kiri');
            $table->unsignedInteger('network_outer_node_right_member_id')->comment('Titik Terluar Posisi Kanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_network_outer_node');
    }
};
