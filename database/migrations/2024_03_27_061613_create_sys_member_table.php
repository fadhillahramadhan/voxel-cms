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
        Schema::create('sys_member', function (Blueprint $table) {
            $table->comment('Data semua member');
            $table->increments('member_id');
            $table->unsignedInteger('member_parent_member_id')->comment('ID Member Grouping');
            $table->string('member_name', 100)->default('')->comment('Nama Member');
            $table->string('member_email', 100)->default('')->index('member_email')->comment('Email Member');
            $table->string('member_mobilephone', 16)->default('')->comment('Nomor Handphone Member');
            $table->enum('member_gender', ['Laki-laki', 'Perempuan'])->default('Laki-laki')->comment('Jenis Kelamin Member');
            $table->string('member_birth_place', 30)->nullable()->comment('Tempat Lahir Member');
            $table->date('member_birth_date')->nullable()->comment('Tanggal Lahir Member');
            $table->string('member_address')->nullable()->comment('Alamat Member');
            $table->unsignedInteger('member_subdistrict_id')->default(0)->comment('Kecamatan Member');
            $table->unsignedInteger('member_city_id')->default(0)->index('member_city_id')->comment('Kota/Kabupaten Member');
            $table->unsignedInteger('member_province_id')->default(0)->comment('Propinsi Member');
            $table->unsignedInteger('member_country_id')->default(0)->comment('Negara Member');
            $table->unsignedInteger('member_bank_id')->default(0)->comment('ID Ref Bank');
            $table->string('member_bank_name', 100)->nullable()->comment('Nama Bank Member');
            $table->string('member_bank_account_name', 50)->nullable()->comment('Nama Rekening Member');
            $table->string('member_bank_account_no', 50)->nullable()->index('member_bank_account_no')->comment('Nomor Rekening Member');
            $table->string('member_bank_city', 50)->nullable()->comment('Kota Bank Member');
            $table->string('member_bank_branch', 50)->nullable()->comment('Cabang Bank Member');
            $table->enum('member_identity_type', ['KTP', 'SIM', 'PASPOR'])->default('KTP')->comment('Jenis Identitas Member');
            $table->char('member_identity_no', 20)->default('')->index('member_identity_no')->comment('Nomor Identitas Member');
            $table->string('member_identity_image')->nullable()->comment('Gambar Identitas Member');
            $table->string('member_identity_image_filename')->nullable();
            $table->string('member_tax_no', 25)->nullable()->comment('Nomor NPWP Member');
            $table->string('member_tax_image')->nullable()->comment('Gambar NPWP');
            $table->string('member_image')->nullable()->comment('Foto Profil Member');
            $table->string('member_image_filename');
            $table->string('member_mother_name', 100)->nullable()->comment('Nama Ibu Kandung Member');
            $table->string('member_job', 100)->nullable();
            $table->string('member_devisor_name', 100)->nullable()->comment('Nama Pewaris Member');
            $table->string('member_devisor_relation', 50)->nullable()->comment('Hubungan Waris Member');
            $table->string('member_devisor_mobilephone', 40)->default('')->comment('Nomor Kontak Pewaris Member');
            $table->dateTime('member_join_datetime')->comment('Tanggal Join');
            $table->dateTime('member_activation_datetime')->nullable()->comment('Tanggal Aktivasi');
            $table->dateTime('member_expired_datetime')->nullable()->comment('Tanggal Kadaluarsa');
            $table->unsignedTinyInteger('member_is_network')->default(0)->comment('Sudah masuk jaringan atau belum');
            $table->unsignedTinyInteger('member_is_expired')->default(0)->comment('Sudah expired atau belum');
            $table->unsignedTinyInteger('member_status')->default(1)->comment('0: non active | 1: active | 2: suspend | 3: deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_member');
    }
};
