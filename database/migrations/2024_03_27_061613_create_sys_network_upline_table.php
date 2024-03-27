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
        Schema::create('sys_network_upline', function (Blueprint $table) {
            $table->comment('data jalur upline');
            $table->unsignedInteger('network_upline_member_id')->primary()->comment('ID Member');
            $table->longText('network_upline_arr_data')->nullable()->comment('Data Array Jalur Upline ke Atas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_network_upline');
    }
};
