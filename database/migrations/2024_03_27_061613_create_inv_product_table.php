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
        Schema::create('inv_product', function (Blueprint $table) {
            $table->comment('Data Master Produk');
            $table->increments('product_id');
            $table->string('product_code', 20)->default('')->comment('Kode Produk');
            $table->string('product_name', 50)->default('')->comment('Nama Produk');
            $table->unsignedInteger('product_bv')->default(0)->comment('Poin BV Produk Untuk Ditukarkan Serial');
            $table->unsignedInteger('product_price')->default(0)->comment('Harga Umum');
            $table->enum('product_type', ['activation', 'upgrade', 'repeatorder'])->default('repeatorder');
            $table->unsignedInteger('product_master_stockist_price')->default(0)->comment('Harga Master Stockist');
            $table->unsignedInteger('product_mobile_stockist_price')->default(0)->comment('Harga Mobile Stockist');
            $table->unsignedInteger('product_member_price')->default(0)->comment('Harga Member');
            $table->unsignedInteger('product_weight')->default(0)->comment('Berat Dalam Gram');
            $table->mediumText('product_description')->nullable()->comment('Deskripsi Produk');
            $table->string('product_image')->nullable()->comment('Gambar Produk');
            $table->dateTime('product_input_datetime')->nullable()->comment('Tanggal Input');
            $table->unsignedTinyInteger('product_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_product');
    }
};
