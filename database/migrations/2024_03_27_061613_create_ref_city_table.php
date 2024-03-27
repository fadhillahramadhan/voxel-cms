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
        Schema::create('ref_city', function (Blueprint $table) {
            $table->comment('tabel kota');
            $table->char('city_id', 4)->primary()->comment('ID Kota');
            $table->char('city_province_id', 2)->index('city_province_id')->comment('ID Provinsi');
            $table->string('city_name', 100)->comment('Nama Kota');
            $table->string('city_type', 50);
            $table->char('city_latitude', 30)->nullable()->comment('Garis Lintang');
            $table->char('city_longitude', 30)->nullable()->comment('Garis Bujur');
            $table->unsignedTinyInteger('city_is_active')->default(1)->index('city_is_active')->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_city');
    }
};
