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
        Schema::create('site_running_text', function (Blueprint $table) {
            $table->increments('running_text_id');
            $table->string('running_text_description')->nullable()->comment('Isi Pesan');
            $table->unsignedTinyInteger('running_text_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_running_text');
    }
};
