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
        Schema::create('sys_bonus_transfer', function (Blueprint $table) {
            $table->increments('bonus_transfer_id');
            $table->string('bonus_transfer_code', 50)->nullable()->default('');
            $table->unsignedInteger('bonus_transfer_parent_member_id')->comment('ID Mitra');
            $table->unsignedBigInteger('bonus_transfer_value')->default(0);
            $table->unsignedInteger('bonus_transfer_member_bank_id')->comment('ID Bank Mitra');
            $table->string('bonus_transfer_member_bank_name', 100)->comment('Nama Bank Mitra');
            $table->string('bonus_transfer_member_bank_account_name', 50)->comment('Nama Rekening Mitra');
            $table->string('bonus_transfer_member_bank_account_no', 50)->comment('Nomor Rekening Mitra');
            $table->enum('bonus_transfer_adm_charge_type', ['value', 'percent'])->default('value')->comment('Tipe Potongan Admin (Nilai Fix / Persentase)');
            $table->decimal('bonus_transfer_adm_charge_percent', 15, 3)->unsigned()->comment('Persentase Potongan Admin');
            $table->unsignedInteger('bonus_transfer_adm_charge_value')->default(0)->comment('Nilai Potongan Admin');
            $table->unsignedInteger('bonus_transfer_margin_disbursment')->default(0)->comment('1300');
            $table->unsignedInteger('bonus_transfer_hpp_disbursment')->default(0)->comment('1700');
            $table->enum('bonus_transfer_tax_type', ['value', 'percent']);
            $table->decimal('bonus_transfer_tax_percent', 15, 3)->unsigned()->default(0);
            $table->unsignedInteger('bonus_transfer_tax_value')->default(0);
            $table->enum('bonus_transfer_status', ['pending', 'processing', 'success', 'failed'])->default('pending');
            $table->unsignedInteger('bonus_transfer_status_administrator_id')->nullable();
            $table->dateTime('bonus_transfer_status_datetime')->nullable();
            $table->date('bonus_transfer_date')->comment('Tanggal Transfer');
            $table->dateTime('bonus_transfer_datetime')->comment('Tanggal Transfer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_bonus_transfer');
    }
};
