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
        Schema::create('log_member_update', function (Blueprint $table) {
            $table->increments('member_update_id');
            $table->unsignedInteger('member_update_member_id')->comment('ID Member');
            $table->char('member_update_network_code', 20)->default('')->comment('Kode Member');
            $table->string('member_update_type', 25)->default('')->comment('Jenis Update');
            $table->string('member_update_page', 25)->default('')->comment('Halaman');
            $table->string('member_update_username', 25)->default('')->comment('Username Yang Melakukan Update');
            $table->string('member_update_name', 100)->default('')->comment('Nama Yang Melakukan Update');
            $table->mediumText('member_update_change')->comment('Informasi Data Sebelum dan Sesudah Update (JSON)');
            $table->mediumText('member_update_query')->comment('Query Yang DIjalankan');
            $table->mediumText('member_update_note')->comment('Keterangan');
            $table->dateTime('member_update_datetime')->comment('Tanggal Update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_member_update');
    }
};
