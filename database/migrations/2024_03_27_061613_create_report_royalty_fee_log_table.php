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
        Schema::create('report_royalty_fee_log', function (Blueprint $table) {
            $table->comment('tabel log fee royalti');
            $table->increments('royalty_fee_log_id');
            $table->unsignedInteger('royalty_fee_log_value')->default(0)->comment('Nilai Royalti');
            $table->enum('royalty_fee_log_type', ['in', 'out'])->default('out')->comment('Keluar / Masuk');
            $table->mediumText('royalty_fee_log_note')->nullable()->comment('Keterangan');
            $table->dateTime('royalty_fee_log_input_datetime')->comment('Tanggal Input');
            $table->unsignedInteger('royalty_fee_log_input_administrator_id')->nullable()->comment('ID Administrator yang Input (Jika Ada)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_royalty_fee_log');
    }
};
