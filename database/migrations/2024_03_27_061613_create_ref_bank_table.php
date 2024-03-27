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
        Schema::create('ref_bank', function (Blueprint $table) {
            $table->comment('data referensi bank');
            $table->increments('bank_id')->comment('ID Bank');
            $table->string('bank_code', 50)->comment('Kode Bank');
            $table->string('bank_name')->comment('Nama Bank');
            $table->string('bank_logo')->default('')->comment('Logo Bank');
            $table->boolean('bank_can_disburse')->default(true);
            $table->boolean('bank_can_name_validate')->default(true);
            $table->unsignedTinyInteger('bank_is_active')->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_bank');
    }
};
