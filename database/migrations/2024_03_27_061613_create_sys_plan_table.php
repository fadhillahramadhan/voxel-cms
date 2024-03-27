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
        Schema::create('sys_plan', function (Blueprint $table) {
            $table->comment('Data aktivitas plan member');
            $table->increments('plan_id');
            $table->string('plan_name', 50);
            $table->unsignedInteger('plan_pin')->default(0);
            $table->unsignedInteger('plan_price')->default(0);
            $table->enum('plan_type', ['Reguler'])->default('Reguler');
            $table->string('plan_netgrow_prefix', 50)->default('');
            $table->string('plan_color', 50);
            $table->integer('plan_sponsor_bonus')->default(0);
            $table->integer('plan_match_bonus')->default(0);
            $table->integer('plan_match_max_flushout')->default(0);
            $table->integer('plan_sponsor_gen_bonus')->nullable()->default(0);
            $table->integer('plan_sponsor_gen_max_level')->nullable()->default(0);
            $table->integer('plan_match_gen_bonus')->nullable()->default(0);
            $table->integer('plan_match_gen_max_level')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_plan');
    }
};
