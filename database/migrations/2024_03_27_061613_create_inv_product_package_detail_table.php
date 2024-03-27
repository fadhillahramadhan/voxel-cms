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
        Schema::create('inv_product_package_detail', function (Blueprint $table) {
            $table->increments('product_package_detail_id');
            $table->unsignedInteger('product_package_detail_product_package_id');
            $table->unsignedInteger('product_package_detail_product_id');
            $table->unsignedInteger('product_package_detail_price')->default(0);
            $table->unsignedInteger('product_package_detail_quantity')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_product_package_detail');
    }
};
