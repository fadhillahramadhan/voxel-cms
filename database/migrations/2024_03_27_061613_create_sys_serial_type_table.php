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
        Schema::create('sys_serial_type', function (Blueprint $table) {
            $table->comment('Data tipe serial');
            $table->tinyIncrements('serial_type_id');
            $table->string('serial_type_prefix', 4)->default('')->comment('Prefiks Serial');
            $table->string('serial_type_name', 50)->default('')->comment('Nama Tipe / Paket');
            $table->unsignedInteger('serial_type_point')->default(0)->comment('Poin Serial');
            $table->unsignedInteger('serial_type_price')->default(0)->comment('Harga');
            $table->unsignedInteger('serial_type_bv')->default(0)->comment('nilai bv');
            $table->enum('serial_type_type', ['REGISTRATION', 'UPGRADE', 'RO'])->default('REGISTRATION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_serial_type');
    }
};
