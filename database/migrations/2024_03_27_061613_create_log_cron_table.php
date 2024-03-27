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
        Schema::create('log_cron', function (Blueprint $table) {
            $table->increments('cron_id')->comment('ID Cron');
            $table->string('cron_name', 50)->default('')->comment('Nama Cron');
            $table->mediumText('cron_result')->comment('Hasil Cron');
            $table->date('cron_date')->comment('Tanggal Penghitungan');
            $table->dateTime('cron_datetime_start')->comment('Waktu Mulai Cron');
            $table->dateTime('cron_datetime_end')->comment('Waktu Selesai Cron');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_cron');
    }
};
