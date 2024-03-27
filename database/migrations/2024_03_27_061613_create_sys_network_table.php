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
        Schema::create('sys_network', function (Blueprint $table) {
            $table->comment('data jaringan');
            $table->unsignedInteger('network_member_id')->primary()->comment('ID Member');
            $table->unsignedInteger('network_parent_member_id')->default(0);
            $table->char('network_code', 20)->default('')->index('network_code')->comment('Kode Member');
            $table->unsignedInteger('network_sponsor_member_id')->default(0)->comment('ID Member Sponsor');
            $table->char('network_sponsor_network_code', 20)->default('')->comment('Kode Network Sponsor');
            $table->unsignedInteger('network_upline_member_id')->default(0)->comment('ID Member Upline');
            $table->char('network_upline_network_code', 20)->comment('Kode Member Upline');
            $table->unsignedInteger('network_total_sponsoring')->default(0)->comment('Jumlah Sponsorisasi');
            $table->unsignedTinyInteger('network_is_active')->default(1)->comment('Status Aktif');
            $table->unsignedTinyInteger('network_is_suspended')->default(0)->comment('Status Suspend');
            $table->unsignedTinyInteger('network_is_free')->default(0)->comment('Status Member Free');
            $table->unsignedTinyInteger('network_is_use')->default(0)->comment('	status member in use	');
            $table->dateTime('network_activation_datetime')->nullable()->comment('Tanggal Aktivasi');
            $table->unsignedInteger('network_point')->default(0)->comment('Point Mitra');
            $table->string('network_slug')->nullable()->default('')->index('referral_code');
            $table->unsignedInteger('network_left_node_member_id')->nullable()->default(0);
            $table->unsignedInteger('network_right_node_member_id')->nullable()->default(0);
            $table->unsignedInteger('network_total_node_left')->default(0)->comment('Jumlah Titik Kiri');
            $table->unsignedInteger('network_total_node_right')->default(0)->comment('Jumlah Titik Kanan');
            $table->unsignedInteger('network_total_point_left')->default(0)->comment('Jumlah Point Kiri');
            $table->unsignedInteger('network_total_point_right')->default(0)->comment('Jumlah Point Kanan');
            $table->char('network_position', 1)->nullable()->default('L');
            $table->string('network_code_migrate', 20)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_network');
    }
};
