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
        Schema::create('site_administrator_group', function (Blueprint $table) {
            $table->comment('data grup administrator');
            $table->increments('administrator_group_id')->comment('ID Grup Administrator');
            $table->string('administrator_group_title', 50)->nullable()->comment('Nama Grup Administrator');
            $table->enum('administrator_group_type', ['superuser', 'administrator'])->default('administrator')->comment('Tipe Grup Administrator');
            $table->unsignedTinyInteger('administrator_group_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_administrator_group');
    }
};
