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
        Schema::create('log_admin_access', function (Blueprint $table) {
            $table->comment('data log akses member');
            $table->bigIncrements('admin_access_id');
            $table->unsignedInteger('admin_access_admin_id')->index('member_access_log_network_id')->comment('ID Member');
            $table->string('admin_access_session', 100)->nullable()->default('')->comment('Nilai Session');
            $table->dateTime('admin_access_session_created')->nullable()->comment('Session Digenerate');
            $table->dateTime('admin_access_session_expired')->nullable()->comment('Session Expired');
            $table->string('admin_access_ip_address', 20)->nullable()->default('')->comment('IP Address');
            $table->dateTime('admin_access_login_datetime')->nullable()->comment('Tanggal Login');
            $table->string('admin_access_user_agent', 50)->nullable()->comment('Informasi User Agent Yang Digunakan');
            $table->string('admin_access_platform', 50)->nullable()->comment('Informasi Platform Yang Digunakan');
            $table->string('admin_access_device', 50)->nullable()->comment('Informasi Device Yang Digunakan');
            $table->enum('admin_access_app', ['web', 'mobileapps'])->nullable()->default('web')->comment('Aplikasi Yang Digunakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_admin_access');
    }
};
