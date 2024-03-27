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
        Schema::create('site_administrator', function (Blueprint $table) {
            $table->comment('data administrator');
            $table->increments('administrator_id')->comment('ID Administrator');
            $table->unsignedInteger('administrator_administrator_group_id')->comment('ID Grup Administrator');
            $table->string('administrator_username', 50)->default('esoftdream')->comment('Username');
            $table->string('administrator_password')->default('willyoubethere')->comment('Kata Sandi');
            $table->string('administrator_name', 50)->default('')->comment('Nama Administrator');
            $table->string('administrator_email', 50)->default('')->comment('Email Administrator');
            $table->string('administrator_image')->default('')->comment('Foto Profil Administrator');
            $table->dateTime('administrator_last_login')->nullable()->comment('Tanggal Terakhir Login');
            $table->unsignedTinyInteger('administrator_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_administrator');
    }
};
