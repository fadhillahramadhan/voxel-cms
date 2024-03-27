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
        Schema::create('sys_stock_network_code', function (Blueprint $table) {
            $table->comment('Data stok kode network');
            $table->increments('stock_network_code_id');
            $table->char('stock_network_code_value', 20)->default('')->unique('stock_network_code_value')->comment('Kode Network');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_stock_network_code');
    }
};
