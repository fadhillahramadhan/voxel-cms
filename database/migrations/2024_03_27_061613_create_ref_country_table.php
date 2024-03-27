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
        Schema::create('ref_country', function (Blueprint $table) {
            $table->comment('data referensi negara');
            $table->increments('country_id');
            $table->string('country_iso_code', 5)->nullable();
            $table->string('country_phone_code', 25)->nullable();
            $table->string('country_name', 100)->nullable();
            $table->string('country_flag', 100)->nullable();
            $table->enum('country_is_active', ['0', '1'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_country');
    }
};
