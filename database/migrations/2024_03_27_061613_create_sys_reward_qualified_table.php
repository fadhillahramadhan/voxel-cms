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
        Schema::create('sys_reward_qualified', function (Blueprint $table) {
            $table->comment('Data kualifikasi perolehan reward');
            $table->increments('reward_qualified_id');
            $table->unsignedInteger('reward_qualified_parent_member_id')->comment('ID Member');
            $table->unsignedInteger('reward_qualified_member_id');
            $table->unsignedInteger('reward_qualified_reward_id')->comment('ID Reward');
            $table->string('reward_qualified_reward_title', 100)->nullable()->comment('Nama Reward');
            $table->unsignedInteger('reward_qualified_reward_value')->default(0)->comment('Nilai Reward');
            $table->unsignedInteger('reward_qualified_condition_sponsor')->default(0)->comment('Syarat Sponsoring');
            $table->decimal('reward_qualified_condition_point_left', 15, 3)->unsigned()->nullable()->default(0)->comment('Syarat Poin Kiri');
            $table->decimal('reward_qualified_condition_point_right', 15, 3)->unsigned()->nullable()->default(0)->comment('Syarat Poin Kanan');
            $table->decimal('reward_qualified_condition_point', 15, 3)->unsigned()->default(0);
            $table->unsignedInteger('reward_qualified_condition_rank_id')->default(0)->comment('Syarat Peringkat');
            $table->dateTime('reward_qualified_datetime')->comment('Tanggal Pencapaian Reward');
            $table->enum('reward_qualified_status', ['pending', 'approved', 'rejected'])->default('pending')->comment('Status Pencairan Reward');
            $table->unsignedInteger('reward_qualified_status_administrator_id')->default(0)->comment('ID Administrator Approval Reward');
            $table->dateTime('reward_qualified_status_datetime')->nullable()->comment('Tanggal Approval Reward');
            $table->enum('reward_qualified_claim', ['claimed', 'unclaimed'])->nullable()->default('unclaimed')->comment('Status Klaim Reward');
            $table->dateTime('reward_qualified_claim_datetime')->nullable()->comment('Tanggal Klaim Reward');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_reward_qualified');
    }
};
