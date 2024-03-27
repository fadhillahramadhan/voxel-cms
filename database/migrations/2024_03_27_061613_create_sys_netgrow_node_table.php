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
        Schema::create('sys_netgrow_node', function (Blueprint $table) {
            $table->comment('data log titik per member per downline per hari');
            $table->bigIncrements('netgrow_node_id');
            $table->unsignedInteger('netgrow_node_member_id')->index('netgrow_node_network_id')->comment('ID Member Jalur Upline');
            $table->unsignedInteger('netgrow_node_parent_member_id');
            $table->unsignedInteger('netgrow_node_downline_member_id')->comment('ID Member Member Join');
            $table->unsignedTinyInteger('netgrow_node_point')->default(0)->comment('Nilai Poin Member Join');
            $table->char('netgrow_node_position', 1)->default('')->comment('	Posisi Titik Member Join (L / R)');
            $table->unsignedInteger('netgrow_node_level')->default(0)->comment('Level Kedalaman Member Join dari Upline Terhitung');
            $table->date('netgrow_node_date')->index('netgrow_node_date')->comment('Tanggal Kejadian ');
            $table->dateTime('netgrow_node_datetime')->comment('Tanggal Input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_netgrow_node');
    }
};
