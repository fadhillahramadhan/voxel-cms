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
        Schema::create('sys_reward', function (Blueprint $table) {
            $table->comment('Data reward');
            $table->increments('reward_id');
            $table->string('reward_title', 100)->nullable()->comment('Nama Reward');
            $table->string('reward_description')->nullable()->comment('Deskripsi Reward');
            $table->string('reward_image_filename', 150)->nullable()->comment('Gambar Bonus Reward');
            $table->string('reward_image')->nullable();
            $table->string('reward_value', 100)->nullable()->comment('Nilai Reward');
            $table->unsignedInteger('reward_condition_sponsor')->default(0)->comment('Syarat Sponsoring');
            $table->decimal('reward_condition_point_left', 15, 3)->unsigned()->nullable()->default(0)->comment('Syarat Poin Kiri');
            $table->decimal('reward_condition_point_right', 15, 3)->unsigned()->nullable()->default(0)->comment('Syarat Poin Kanan');
            $table->unsignedInteger('reward_condition_rank_id')->default(0)->comment('Syarat Peringkat');
            $table->unsignedTinyInteger('reward_is_active')->nullable()->default(1)->comment('Status Aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_reward');
    }
};
