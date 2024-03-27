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
        Schema::create('sys_member_plan_activity', function (Blueprint $table) {
            $table->comment('Data aktivitas plan member');
            $table->increments('member_plan_activity_id');
            $table->unsignedInteger('member_plan_activity_parent_member_id')->nullable();
            $table->unsignedInteger('member_plan_activity_plan_id')->nullable();
            $table->unsignedInteger('member_plan_activity_member_id')->nullable()->comment('ID Member');
            $table->integer('member_plan_activity_value')->default(0)->comment('Harga Serial');
            $table->enum('member_plan_activity_type', ['membership', 'activation', 'upgrade', 'repeatorder'])->default('membership')->comment('Tipe Aktivitas');
            $table->string('member_plan_activity_note')->nullable()->comment('Keterangan');
            $table->dateTime('member_plan_activity_datetime')->comment('Tanggal Kepemilikan / Tanggal Beli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_member_plan_activity');
    }
};
