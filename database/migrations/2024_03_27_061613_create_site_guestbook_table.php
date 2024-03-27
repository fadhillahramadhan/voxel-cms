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
        Schema::create('site_guestbook', function (Blueprint $table) {
            $table->increments('guestbook_id');
            $table->string('guestbook_name')->default('')->comment('Nama Pengunjung');
            $table->string('guestbook_email')->nullable()->comment('Email Pengunjung');
            $table->string('guestbook_mobilephone', 20)->nullable()->comment('Nomor Kontak Pengunjung');
            $table->mediumText('guestbook_address')->nullable()->comment('Alamat Pengunjung');
            $table->unsignedInteger('guestbook_province_id')->default(0)->comment('ID Propinsi Pengunjung');
            $table->unsignedInteger('guestbook_city_id')->default(0)->comment('ID Kota Pengunjung');
            $table->unsignedTinyInteger('guestbook_status')->default(0)->comment('Status Pesan (0: Unread; 1: Read)');
            $table->dateTime('guestbook_datetime')->comment('Tanggal Input Buku Tamu');
            $table->unsignedInteger('guestbook_followup_member_id')->default(0)->comment('ID Member yang Menindaklanjuti');
            $table->dateTime('guestbook_followup_datetime')->nullable()->comment('Tanggal Tindak Lanjut Member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_guestbook');
    }
};
