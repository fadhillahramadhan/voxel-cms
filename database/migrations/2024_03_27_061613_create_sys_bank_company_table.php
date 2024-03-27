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
        Schema::create('sys_bank_company', function (Blueprint $table) {
            $table->increments('bank_company_id');
            $table->unsignedInteger('bank_company_bank_id')->comment('ID Bank');
            $table->string('bank_company_bank_acc_name', 50)->default('')->comment('Nama Rekening');
            $table->string('bank_company_bank_acc_number', 50)->default('')->comment('Nomor Rekening');
            $table->unsignedTinyInteger('bank_company_bank_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_bank_company');
    }
};
