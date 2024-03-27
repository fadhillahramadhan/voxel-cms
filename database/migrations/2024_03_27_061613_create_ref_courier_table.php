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
        Schema::create('ref_courier', function (Blueprint $table) {
            $table->integer('courier_id', true);
            $table->string('courier_code', 10);
            $table->string('courier_name', 100);
            $table->mediumText('courier_image')->nullable();
            $table->boolean('courier_is_active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_courier');
    }
};
