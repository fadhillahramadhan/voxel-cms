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
        Schema::create('site_administrator_privilege', function (Blueprint $table) {
            $table->comment('data hak akses menu administrator');
            $table->increments('administrator_privilege_id');
            $table->unsignedInteger('administrator_privilege_administrator_group_id')->comment('ID Grup Administrator');
            $table->unsignedInteger('administrator_privilege_administrator_menu_id')->comment('ID Menu Administrator');
            $table->string('administrator_privilege_action')->default('')->comment('Aksi Menu (create, update, delete, approve)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_administrator_privilege');
    }
};
