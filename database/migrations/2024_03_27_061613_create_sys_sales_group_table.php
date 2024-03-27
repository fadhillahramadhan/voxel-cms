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
        Schema::create('sys_sales_group', function (Blueprint $table) {
            $table->increments('sales_group_id');
            $table->unsignedInteger('sales_group_sales_personal_id')->index('sales_group_sales_personal_id');
            $table->unsignedInteger('sales_group_parent_member_id')->index('sales_group_parent_member_id');
            $table->unsignedInteger('sales_group_member_id')->index('sales_group_member_id')->comment('member id upline');
            $table->unsignedInteger('sales_group_trigger_member_id')->comment('member Id yang melakukan RO');
            $table->unsignedTinyInteger('sales_group_month')->comment('BULAN RO dilakukan');
            $table->year('sales_group_year')->nullable()->comment('Tahun RO dilakukan');
            $table->integer('sales_group_level_real')->comment('Level jalur generasi upline yang sesungguhnya');
            $table->enum('sales_group_position', ['L', 'R', ''])->default('');
            $table->enum('sales_group_real_position', ['L', 'R', ''])->default('');
            $table->date('sales_group_date');
            $table->integer('sales_group_value')->comment('Nominal RO');
            $table->integer('sales_group_point')->default(1);

            $table->index(['sales_group_year', 'sales_group_month'], 'sales_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_sales_group');
    }
};
