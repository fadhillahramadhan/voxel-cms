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
        Schema::create('ref_province', function (Blueprint $table) {
            $table->comment('tabel provinsi');
            $table->char('province_id', 2)->primary()->comment('ID Provinsi');
            $table->string('province_name', 100)->comment('Nama Provinsi');
            $table->char('province_latitude', 30)->nullable();
            $table->char('province_longitude', 30)->nullable();
            $table->enum('province_is_active', ['0', '1'])->default('1')->index('province_is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_province');
    }
};
