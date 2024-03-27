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
        Schema::create('log_member_access', function (Blueprint $table) {
            $table->comment('data log akses member');
            $table->bigIncrements('member_access_id');
            $table->unsignedInteger('member_access_member_id')->index('member_access_log_network_id')->comment('ID Member');
            $table->string('member_access_session', 100)->nullable()->default('')->comment('Nilai Session');
            $table->dateTime('member_access_session_created')->nullable()->comment('Session Digenerate');
            $table->dateTime('member_access_session_expired')->nullable()->comment('Session Expired');
            $table->string('member_access_ip_address', 20)->nullable()->default('')->comment('IP Address');
            $table->dateTime('member_access_login_datetime')->nullable()->comment('Tanggal Login');
            $table->string('member_access_user_agent', 50)->nullable()->comment('Informasi User Agent Yang Digunakan');
            $table->string('member_access_platform', 50)->nullable()->comment('Informasi Platform Yang Digunakan');
            $table->string('member_access_device', 50)->nullable()->comment('Informasi Device Yang Digunakan');
            $table->enum('member_access_app', ['web', 'mobileapps'])->nullable()->default('web')->comment('Aplikasi Yang Digunakan');
            $table->unsignedTinyInteger('member_access_is_from_admin')->default(0)->comment('0 dari member : 1 dari admin');
            $table->unsignedInteger('member_access_administrator_id')->default(0)->comment('0 jika bukan auto login dari admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_member_access');
    }
};
