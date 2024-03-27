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
        Schema::create('site_content_category', function (Blueprint $table) {
            $table->increments('content_category_id');
            $table->string('content_category_name', 100)->default('')->unique('content_category_name')->comment('Nama Kategori Halaman');
            $table->string('content_category_slug', 100)->default('')->comment('Slug (Address Bar)');
            $table->unsignedTinyInteger('content_category_is_active')->default(1)->comment('Status Aktif');
            $table->unsignedTinyInteger('content_category_is_one')->nullable()->default(0)->comment('0: Konten Bisa Banyak; 1: Konten Hanya Satu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_content_category');
    }
};
