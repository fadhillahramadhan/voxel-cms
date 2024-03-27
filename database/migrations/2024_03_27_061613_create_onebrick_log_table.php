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
        Schema::create('onebrick_log', function (Blueprint $table) {
            $table->integer('onebrick_id', true);
            $table->string('onebrick_bonus_transfer_code', 50)->nullable();
            $table->string('onebrick_ref_id', 50)->nullable();
            $table->text('onebrick_response')->nullable();
            $table->string('onebrick_status', 50)->nullable();
            $table->string('onebrick_status_request', 50)->nullable();
            $table->dateTime('onebrick_datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onebrick_log');
    }
};
