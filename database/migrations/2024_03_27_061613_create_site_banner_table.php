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
        Schema::create('site_banner', function (Blueprint $table) {
            $table->increments('banner_id');
            $table->string('banner_title', 50)->nullable()->comment('Judul Banner');
            $table->string('banner_label', 50)->nullable()->comment('Label Banner');
            $table->mediumText('banner_description')->nullable()->comment('Deskripsi Banner');
            $table->string('banner_image', 200)->default('')->comment('Path File Banner');
            $table->string('banner_image_mobile', 200)->nullable()->comment('Path File Banner');
            $table->unsignedInteger('banner_order_by')->comment('Urutan Banner');
            $table->unsignedTinyInteger('banner_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_banner');
    }
};
