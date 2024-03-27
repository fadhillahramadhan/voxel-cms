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
        Schema::create('report_royalty_fee_log_monthly', function (Blueprint $table) {
            $table->comment('tabel log fee royalti bulanan');
            $table->increments('royalty_fee_log_monthly_id');
            $table->date('royalty_fee_log_monthly_year_month')->comment('Bulan Berjalan');
            $table->unsignedInteger('royalty_fee_log_monthly_value_in')->default(0)->comment('Top Up Deposit');
            $table->unsignedInteger('royalty_fee_log_monthly_value_out')->default(0)->comment('Fee Royalti');
            $table->unsignedInteger('royalty_fee_log_monthly_bill')->default(0)->comment('Tagihan');
            $table->unsignedInteger('royalty_fee_log_monthly_paid')->default(0)->comment('Tagihan Terbayar');
            $table->unsignedInteger('royalty_fee_log_monthly_unpaid')->default(0)->comment('Tagihan Belum Terbayar');
            $table->enum('royalty_fee_log_monthly_status', ['paid', 'unpaid'])->default('unpaid')->comment('Lunas / Belum Lunas');
            $table->integer('royalty_fee_log_monthly_balance')->default(0)->comment('Saldo Deposit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_royalty_fee_log_monthly');
    }
};
