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
        Schema::create('sys_transaction_detail', function (Blueprint $table) {
            $table->increments('transaction_detail_id');
            $table->unsignedInteger('transaction_detail_transaction_id')->index('transaction_detail_transaction_id');
            $table->unsignedInteger('transaction_detail_product_id')->default(0);
            $table->string('transaction_detail_product_code', 20);
            $table->string('transaction_detail_product_name', 20);
            $table->enum('transaction_detail_product_serial_type', ['membership', 'ro'])->nullable()->default('membership')->index('transaction_detail_product_serial_type');
            $table->unsignedInteger('transaction_detail_unit_price')->default(0);
            $table->float('transaction_detail_product_discount')->default(0);
            $table->enum('transaction_detail_product_discount_type', ['percent', 'value'])->default('value');
            $table->float('transaction_detail_product_admin_charge')->nullable();
            $table->enum('transaction_detail_product_admin_charge_type', ['percent', 'value'])->default('value');
            $table->integer('transaction_detail_product_weight')->default(0);
            $table->unsignedInteger('transaction_detail_qty')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_transaction_detail');
    }
};
