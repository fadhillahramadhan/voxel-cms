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
        Schema::create('sys_pin_log', function (Blueprint $table) {
            $table->comment('Riwayat bonus');
            $table->increments('pin_log_id');
            $table->unsignedInteger('pin_log_parent_member_id')->comment('ID Member');
            $table->unsignedInteger('pin_log_value')->default(0)->comment('Nominal');
            $table->enum('pin_log_type', ['in', 'out'])->default('in');
            $table->string('pin_log_note')->default('')->comment('Keterangan');
            $table->date('pin_log_date');
            $table->dateTime('pin_log_datetime')->comment('Tanggal Kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_pin_log');
    }
};
