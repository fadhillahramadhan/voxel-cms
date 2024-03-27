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
        Schema::create('ref_subdistrict', function (Blueprint $table) {
            $table->comment('tabel kecamatan');
            $table->char('subdistrict_id', 6)->primary()->comment('ID Kecamatan');
            $table->char('subdistrict_city_id', 4)->index('subdistrict_city_id')->comment('ID Kota');
            $table->string('subdistrict_name', 100)->comment('Nama Kecamatan');
            $table->char('subdistrict_latitude', 30)->nullable();
            $table->char('subdistrict_longitude', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_subdistrict');
    }
};
