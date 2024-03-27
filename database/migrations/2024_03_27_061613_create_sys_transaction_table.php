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
        Schema::create('sys_transaction', function (Blueprint $table) {
            $table->increments('transaction_id')->comment('ID Transaksi');
            $table->string('transaction_code', 20)->comment('Kode Transaksi');
            $table->enum('transaction_category', ['stockist', 'member', 'admin'])->default('member')->comment('Kategori Transaksi');
            $table->unsignedInteger('transaction_member_id')->comment('ID Member');
            $table->unsignedInteger('transaction_seller_id')->default(0)->index('transaction_seller_id')->comment('ID Seller (Non Required)');
            $table->string('transaction_received_name', 50)->default('')->comment('Nama Penerima');
            $table->longText('transaction_received_address')->comment('Alamat Penerima');
            $table->string('transaction_received_mobilephone', 16)->default('')->comment('Nomor Penerima');
            $table->integer('transaction_received_province_id')->default(0)->comment('ID Provinsi Rajaongkir');
            $table->string('transaction_received_province_name', 50)->default('')->comment('Nama Provinsi Rajaongkir');
            $table->integer('transaction_received_city_id')->default(0)->comment('ID Kota Rajaongkir');
            $table->string('transaction_received_city_name', 50)->default('')->comment('Nama Kota Rajaongkir');
            $table->integer('transaction_received_subdistrict_city_id')->default(0)->comment('ID Kabupaten Rajaongkir');
            $table->string('transaction_received_subdistrict_city_name', 50)->default('')->comment('Name Kabupaten Rajaongkir');
            $table->string('transaction_bank_transfer_attachment', 50)->nullable()->default('')->comment('Bukti Transfer');
            $table->unsignedInteger('transaction_price')->default(0)->comment('Total Transaksi Produk');
            $table->unsignedInteger('transaction_total_price')->default(0)->comment('Total Transaksi Kesuluruhan');
            $table->unsignedInteger('transaction_total_ewallet')->default(0)->comment('Ewallet yang diterima (Non Required)');
            $table->integer('transaction_status')->default(1)->index('transaction_category')->comment('Status transaksi');
            $table->dateTime('transaction_status_datetime')->nullable()->comment('Status transaksi');
            $table->string('transaction_expedition_name', 50)->default('')->comment('Nama ekspedisi');
            $table->string('transaction_expedition_service', 50)->nullable()->default('')->comment('Nama service ekspedisi');
            $table->integer('transaction_expedition_price')->default(0)->comment('Total ongkir ekspedisi');
            $table->float('transaction_adm_charge')->nullable()->default(0)->comment('Admin charge');
            $table->float('transaction_discount')->nullable()->default(0)->comment('Diskon');
            $table->mediumText('transaction_notes')->nullable()->comment('Note yang diberikan oleh admin');
            $table->string('transaction_receipt_number', 50)->nullable()->default('')->comment('Nomor resi yang diinputkan oleh admin');
            $table->enum('transaction_type', ['registration', 'ro', 'premium', 'upgrade'])->nullable()->default('ro');
            $table->dateTime('transaction_datetime')->comment('Tanggal transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_transaction');
    }
};
