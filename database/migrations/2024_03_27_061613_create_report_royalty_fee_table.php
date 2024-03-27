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
        Schema::create('report_royalty_fee', function (Blueprint $table) {
            $table->comment('tabel fee royalti');
            $table->increments('royalty_fee_id');
            $table->bigInteger('royalty_fee_acc')->comment('Nilai Royalti Terhitung');
            $table->bigInteger('royalty_fee_paid')->comment('Nilai Royalti Dibayar');
            $table->dateTime('royalty_fee_last_updated_datetime')->comment('Tanggal Terakhir Update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_royalty_fee');
    }
};
