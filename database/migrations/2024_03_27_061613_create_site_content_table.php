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
        Schema::create('site_content', function (Blueprint $table) {
            $table->increments('content_id');
            $table->unsignedInteger('content_content_category_id')->comment('Kategori Halaman');
            $table->string('content_keyword')->nullable()->comment('Meta Keyword');
            $table->string('content_description')->nullable()->comment('Meta Description');
            $table->string('content_slug', 100)->comment('Slug (Address Bar)');
            $table->string('content_title', 100)->default('')->comment('Judul Halaman');
            $table->longText('content_body')->comment('Isi Halaman');
            $table->string('content_image')->nullable()->comment('Gambar Halaman');
            $table->unsignedTinyInteger('content_is_active')->default(1)->comment('Status Aktif');
            $table->dateTime('content_input_datetime')->comment('Tanggal Input');
            $table->unsignedInteger('content_input_administrator_id')->default(0)->comment('ID Administrator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_content');
    }
};
