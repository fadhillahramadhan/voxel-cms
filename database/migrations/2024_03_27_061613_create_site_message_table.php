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
        Schema::create('site_message', function (Blueprint $table) {
            $table->increments('message_id');
            $table->enum('message_type', ['pesan', 'serial', 'draf', 'broadcast', 'produk'])->default('pesan')->comment('Tipe Pesan (Pesan, Serial, Draf, Broadcast, Produk)');
            $table->enum('message_sender_ref_type', ['admin', 'member'])->default('member')->comment('Tipe Pengirim Pesan (admin: Administrator; member: Member)');
            $table->unsignedInteger('message_sender_ref_id')->default(0)->index('message_sender_id')->comment('ID Referensi Pengirim Pesan (admin: ID Administrator; member: ID Member)');
            $table->string('message_sender_ref_code', 50)->nullable()->default('')->comment('Kode / Username Referensi Pengirim Pesan (admin: Username Administrator; member: Username Member)');
            $table->string('message_sender_ref_name', 100)->default('')->comment('Nama Referensi Pengirim Pesan (admin: Nama Administrator; member: Nama Member)');
            $table->enum('message_receiver_ref_type', ['admin', 'member'])->default('member')->comment('Tipe Penerima Pesan (admin: Administrator; member: Member)');
            $table->unsignedInteger('message_receiver_ref_id')->default(0)->comment('ID Referensi Penerima Pesan (admin: ID Administrator; member: ID Member)');
            $table->string('message_receiver_ref_code', 50)->nullable()->default('')->comment('Kode / Username Referensi Penerima Pesan (admin: Username Administrator; member: Username Member)');
            $table->string('message_receiver_ref_name', 100)->default('')->comment('Nama Referensi Penerima Pesan (admin: Nama Administrator; member: Nama Member)');
            $table->mediumText('message_content')->comment('Isi Pesan');
            $table->unsignedTinyInteger('message_status')->default(0)->comment('Status Pesan (0: Unread, 1: Read, 2: Archive, 3: Delete)');
            $table->dateTime('message_datetime')->comment('Tanggal Kirim Pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_message');
    }
};
