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
        Schema::create('ref_village', function (Blueprint $table) {
            $table->comment('tabel kelurahan');
            $table->char('village_id', 10)->primary()->comment('ID Kelurahan');
            $table->char('village_subdistrict_id', 6)->nullable()->index('village_subdistrict_id')->comment('ID Kecamatan');
            $table->string('village_name', 100)->nullable()->comment('Nama Kelurahan');
            $table->char('village_latitude', 30)->nullable()->comment('Garis Lintang');
            $table->char('village_longitude', 30)->nullable()->comment('Garis Bujur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_village');
    }
};
