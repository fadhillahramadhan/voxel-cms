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
        Schema::create('sys_automaintenance_log', function (Blueprint $table) {
            $table->integer('automaintenance_log_id', true);
            $table->integer('automaintenance_log_network_id')->default(0);
            $table->integer('automaintenance_log_value')->default(0);
            $table->smallInteger('automaintenance_log_circle')->default(0)->comment('putaran ke berapa');
            $table->unsignedInteger('automaintenance_log_total_match')->default(0);
            $table->enum('automaintenance_log_type', ['in', 'out'])->default('in');
            $table->date('automaintenance_log_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_automaintenance_log');
    }
};
