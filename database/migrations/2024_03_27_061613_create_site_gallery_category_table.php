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
        Schema::create('site_gallery_category', function (Blueprint $table) {
            $table->comment('data galeri foto');
            $table->increments('gallery_category_id')->comment('ID Kategori Galeri');
            $table->string('gallery_category_title', 100)->default('')->comment('Nama Kategori');
            $table->string('gallery_category_description', 512)->nullable()->comment('Deskripsi Kategori');
            $table->string('gallery_category_image')->nullable()->comment('Gambar Kategori');
            $table->unsignedTinyInteger('gallery_category_is_active')->default(1)->comment('Status Aktif');
            $table->dateTime('gallery_category_input_datetime')->comment('Tanggal Input');
            $table->unsignedInteger('gallery_category_input_administrator_id')->nullable()->default(0)->comment('ID Administrator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_gallery_category');
    }
};
