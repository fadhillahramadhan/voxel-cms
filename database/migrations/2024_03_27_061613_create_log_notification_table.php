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
        Schema::create('log_notification', function (Blueprint $table) {
            $table->increments('notification_id')->comment('ID Notifikasi');
            $table->enum('notification_type', ['wa', 'email', 'sms', 'telegram'])->nullable()->comment('Jenis Notifikasi');
            $table->string('notification_session', 50)->default('')->comment('Session Ketika Mengirim Pesan');
            $table->text('notification_content')->comment('Isi Pesan');
            $table->string('notification_sender', 50)->default('')->comment('Pengirim Pesan');
            $table->string('notification_receiver', 50)->default('')->comment('Penerima Pesan');
            $table->text('notification_response')->comment('Respon Pengiriman Pesan');
            $table->enum('notification_status', ['Terkirim', 'Gagal'])->default('Gagal')->comment('Status Pengiriman Pesan');
            $table->dateTime('notification_datetime')->comment('Tanggal Kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_notification');
    }
};
