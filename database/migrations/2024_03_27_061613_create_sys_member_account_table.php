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
        Schema::create('sys_member_account', function (Blueprint $table) {
            $table->comment('Data Akun member');
            $table->unsignedInteger('member_account_member_id')->primary()->comment('ID Member');
            $table->string('member_account_username', 50)->default('')->index('member_account_username')->comment('Username Login');
            $table->text('member_account_password')->comment('Password Login');
            $table->char('member_account_pin', 6)->default('')->comment('PIN Pengaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_member_account');
    }
};
