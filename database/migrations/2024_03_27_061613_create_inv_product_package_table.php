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
        Schema::create('inv_product_package', function (Blueprint $table) {
            $table->increments('product_package_id');
            $table->string('product_package_name');
            $table->enum('product_package_type', ['activation', 'repeatorder', 'free'])->default('activation');
            $table->decimal('product_package_point', 10, 1)->unsigned();
            $table->string('product_package_note');
            $table->string('product_package_image')->nullable()->comment('Gambar Paket');
            $table->boolean('product_package_is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_product_package');
    }
};
