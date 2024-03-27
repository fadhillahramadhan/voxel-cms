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
        Schema::create('sys_automaintenance', function (Blueprint $table) {
            $table->integer('automaintenance_network_id', true);
            $table->unsignedInteger('automaintenance_value_acc')->default(0);
            $table->unsignedInteger('automaintenance_value_paid')->default(0);
            $table->integer('automaintenance_count')->default(0);
            $table->unsignedInteger('automaintenance_total_match')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_automaintenance');
    }
};
