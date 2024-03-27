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
        Schema::create('log_administrator_access', function (Blueprint $table) {
            $table->comment('Riwayat administrator access login');
            $table->increments('administrator_access_id');
            $table->unsignedInteger('administrator_access_administrator_id')->comment('ID Administrator');
            $table->string('administrator_access_token')->default('')->comment('Nilai Token');
            $table->string('administrator_access_ip_address', 25)->default('')->comment('IP Address');
            $table->dateTime('administrator_access_login_datetime')->comment('Waktu Login');
            $table->dateTime('administrator_access_logout_datetime')->nullable()->comment('Waktu Logout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_administrator_access');
    }
};
