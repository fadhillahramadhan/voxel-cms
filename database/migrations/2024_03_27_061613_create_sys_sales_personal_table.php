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
        Schema::create('sys_sales_personal', function (Blueprint $table) {
            $table->increments('sales_personal_id');
            $table->unsignedInteger('sales_personal_parent_member_id')->default(0);
            $table->unsignedInteger('sales_personal_member_id')->default(0);
            $table->unsignedInteger('sales_personal_pin_used_member_id')->default(0);
            $table->integer('sales_personal_value')->comment('Nominal RO');
            $table->integer('sales_personal_total_pin');
            $table->tinyInteger('sales_personal_month');
            $table->year('sales_personal_year');
            $table->date('sales_personal_date');
            $table->dateTime('sales_personal_datetime');

            $table->index(['sales_personal_year', 'sales_personal_month'], 'sales_date');
            $table->index(['sales_personal_id'], 'sales_personal_id');
            $table->index(['sales_personal_id'], 'sales_personal_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_sales_personal');
    }
};
