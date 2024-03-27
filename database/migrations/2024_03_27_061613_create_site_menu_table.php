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
        Schema::create('site_menu', function (Blueprint $table) {
            $table->increments('menu_id')->comment('ID Menu');
            $table->unsignedInteger('menu_par_id')->default(0)->comment('ID Menu Parent');
            $table->unsignedInteger('menu_content_id')->default(0)->comment('ID Halaman');
            $table->string('menu_title')->default('')->comment('Judul Menu');
            $table->string('menu_link')->default('')->comment('Link Menu');
            $table->unsignedInteger('menu_order_by')->default(0)->comment('Urutan Menu');
            $table->enum('menu_location', ['public', 'member'])->default('member')->comment('Lokasi Menu (public: Halaman Publik; member: Halaman VO)');
            $table->unsignedTinyInteger('menu_is_active')->default(0)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_menu');
    }
};
