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
        Schema::create('site_administrator_menu', function (Blueprint $table) {
            $table->comment('data menu administrator');
            $table->increments('administrator_menu_id')->comment('ID Menu Administrator');
            $table->unsignedInteger('administrator_menu_par_id')->default(0)->comment('ID Menu Parent Administrator');
            $table->string('administrator_menu_title', 50)->default('')->comment('Judul Menu');
            $table->string('administrator_menu_description')->default('')->comment('Deskripsi Menu');
            $table->string('administrator_menu_link')->default('#')->comment('Link Menu');
            $table->string('administrator_menu_action')->default('')->comment('Aksi Menu (create, update, delete, approve)');
            $table->string('administrator_menu_icon')->default('')->comment('Ikon Menu');
            $table->string('administrator_menu_class')->default('')->comment('Class CSS Menu');
            $table->unsignedInteger('administrator_menu_order_by')->default(0)->comment('Urutan Menu');
            $table->unsignedTinyInteger('administrator_menu_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_administrator_menu');
    }
};
