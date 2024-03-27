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
        Schema::create('report_profit_loss', function (Blueprint $table) {
            $table->comment('tabel laporan laba rugi kotor');
            $table->increments('profit_loss_id');
            $table->date('profit_loss_date')->comment('Tanggal');
            $table->unsignedBigInteger('profit_loss_income_activation_value')->default(0)->comment('Pemasukan Dari Aktivasi Member');
            $table->unsignedBigInteger('profit_loss_income_upgrade_value')->default(0)->comment('Pemasukan Dari Upgrade Member');
            $table->unsignedBigInteger('profit_loss_income_repeat_order_value')->default(0)->comment('Pemasukan Dari RO Member');
            $table->unsignedBigInteger('profit_loss_income_total_value')->default(0)->comment('Total Pemasukan');
            $table->unsignedBigInteger('profit_loss_payout_sponsor_value')->default(0)->comment('Komisi Sponsor Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_match_value')->default(0)->comment('Komisi Pasangan Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_gen_match_value')->default(0)->comment('Komisi Matching Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_b_sponsor_value')->default(0)->comment('Komisi Sponsor Plan B Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_b_reward_value')->default(0)->comment('Komisi Reward Plan B Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_profit_sharing_value')->default(0)->comment('Komisi Sharing Profit Terjadi');
            $table->unsignedBigInteger('profit_loss_payout_total_value')->default(0)->comment('Total Pengeluaran Komisi');
            $table->unsignedBigInteger('profit_loss_cost_cogs')->default(0)->comment('Biaya HPP Produk (Cost of Good Sold)');
            $table->unsignedBigInteger('profit_loss_cost_shipping')->default(0)->comment('Biaya Ongkos Kirim');
            $table->unsignedBigInteger('profit_loss_cost_fee_it_value')->default(0)->comment('Biaya Royalti IT');
            $table->unsignedBigInteger('profit_loss_cost_total_value')->default(0)->comment('Total Pengeluaran Biaya');
            $table->unsignedBigInteger('profit_loss_payout_cost_total_value')->default(0)->comment('Total Pengeluaran Komisi dan Biaya');
            $table->bigInteger('profit_loss_value')->default(0)->comment('Total Laba Kotor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_profit_loss');
    }
};
