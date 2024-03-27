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
        Schema::create('onebrick_profit', function (Blueprint $table) {
            $table->comment('data transfer bonus member');
            $table->increments('onebrick_profit_id');
            $table->string('onebrick_profit_transfer_code', 50)->default('');
            $table->string('onebrick_profit_bank_account_name', 100)->comment('Atas Nama Rekening Bank');
            $table->string('onebrick_profit_bank_account_no', 50)->comment('Nomor Rekening');
            $table->decimal('onebrick_profit_adm_charge_percent', 4)->unsigned()->default(0)->comment('Persentase Biaya Admin');
            $table->unsignedInteger('onebrick_profit_adm_charge_value')->default(0)->comment('Nilai Biaya Admin');
            $table->unsignedInteger('onebrick_profit_subtotal')->default(0)->comment('Nominal Setelah Dipotong Biaya Admin');
            $table->unsignedInteger('onebrick_profit_total')->default(0)->comment('Nominal Sebelum Dipotong Biaya Admin	');
            $table->unsignedInteger('onebrick_profit_bank_id')->comment('ID Ref Bank');
            $table->text('onebrick_profit_note')->comment('Catatan');
            $table->dateTime('onebrick_profit_datetime')->comment('Tanggal Withdrawal');
            $table->enum('onebrick_profit_status', ['pending', 'processing', 'failed', 'success'])->default('pending')->comment('Status Pencairan');
            $table->unsignedInteger('onebrick_profit_status_administrator_id')->nullable()->comment('ID Administrator Approval Withdrawal');
            $table->dateTime('onebrick_profit_status_datetime')->nullable()->comment('Tanggal Approval Withdrawal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onebrick_profit');
    }
};
