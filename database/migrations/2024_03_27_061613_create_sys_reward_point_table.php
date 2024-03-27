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
        Schema::create('sys_reward_point', function (Blueprint $table) {
            $table->unsignedInteger('reward_point_member_id')->primary();
            $table->unsignedInteger('reward_point_left')->default(0);
            $table->unsignedInteger('reward_point_right')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_reward_point');
    }
};
