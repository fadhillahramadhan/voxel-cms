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
        Schema::create('site_gallery', function (Blueprint $table) {
            $table->comment('data item gambar dari gallery');
            $table->increments('gallery_id');
            $table->unsignedInteger('gallery_gallery_category_id')->comment('ID Kategori Galeri');
            $table->string('gallery_slug')->default('')->comment('Slug (Address Bar)');
            $table->string('gallery_title', 100)->default('')->comment('Judul Galeri');
            $table->string('gallery_description', 512)->default('')->comment('Keterangan');
            $table->enum('gallery_type', ['image', 'video'])->nullable()->comment('Tipe Galeri (Gambar / Video)');
            $table->string('gallery_file')->default('')->comment('Path File Galeri');
            $table->unsignedInteger('gallery_order_by')->default(0)->comment('Urutan Tampilan Galeri');
            $table->unsignedTinyInteger('gallery_is_active')->default(1)->comment('Status Aktif');
            $table->dateTime('gallery_input_datetime')->comment('Tanggal Input');
            $table->unsignedInteger('gallery_input_administrator_id')->comment('ID Administrator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_gallery');
    }
};
