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
        Schema::create('sys_serial', function (Blueprint $table) {
            $table->comment('Data serial aktivasi');
            $table->char('serial_id', 16)->default('')->primary()->comment('ID Serial');
            $table->char('serial_pin', 6)->nullable()->default('')->comment('PIN Serial');
            $table->unsignedInteger('serial_serial_type_id')->nullable()->comment('ID Tipe Serial');
            $table->date('serial_expired_date')->nullable()->comment('Tanggal Kadaularsa');
            $table->dateTime('serial_create_datetime')->comment('Tanggal Generate Serial');
            $table->unsignedTinyInteger('serial_is_active')->default(0)->comment('Status Serial Apakah Sudah Diaktifkan');
            $table->dateTime('serial_active_datetime')->nullable()->comment('Tanggal Serial Diaktifkan');
            $table->enum('serial_active_ref_type', ['company', 'stockist', 'member', 'enduser'])->nullable()->comment('Pengaktifan Serial oleh (1: Company; 2: Stockist; 3: Member; 4: Enduser)');
            $table->unsignedInteger('serial_active_ref_id')->default(0)->comment('ID Referensi Pengaktifan Serial (Referensi dari type) (1: ID Administrator; 2: ID Member Stockist; 3: ID Member; 4: null)');
            $table->unsignedTinyInteger('serial_is_used')->default(0)->index('serial_is_used')->comment('Status Serial Apakah Sudah Dipakai');
            $table->dateTime('serial_used_datetime')->nullable()->comment('Tanggal Serial Dipakai');
            $table->unsignedInteger('serial_used_member_id')->default(0)->comment('ID Member yang Menggunakan Serial');
            $table->enum('serial_last_owner_status', ['company', 'stockist', 'member', 'enduser'])->nullable()->comment('Pemilik Terakhir Serial (1: Company; 2: Stockist; 3: Member; 4: Enduser)');
            $table->unsignedInteger('serial_last_owner_ref_id')->nullable()->default(0)->comment('ID Pemilik Terakhir Serial (Referensi dari status) (1: null; 2: ID Member Stockist; 3: ID Member; 4: null)');
            $table->dateTime('serial_last_owner_datetime')->nullable()->comment('Tanggal Kepemilikan Terakhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_serial');
    }
};
