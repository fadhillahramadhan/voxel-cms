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
        Schema::create('report_income_log', function (Blueprint $table) {
            $table->comment('data log pendapatan');
            $table->bigIncrements('income_log_id');
            $table->enum('income_log_type', ['membership', 'activation', 'upgrade', 'repeatorder'])->default('activation')->comment('Tipe Pendapatan');
            $table->unsignedInteger('income_log_value')->comment('Nilai Pendapatan');
            $table->unsignedInteger('income_log_member_id')->comment('ID Member');
            $table->dateTime('income_log_datetime')->comment('Tanggal Kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_income_log');
    }
};
