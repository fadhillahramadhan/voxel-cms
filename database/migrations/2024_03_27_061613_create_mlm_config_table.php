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
        Schema::create('mlm_config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50)->default('');
            $table->string('bonus_suffix', 50)->default('');
            $table->string('period', 50)->default('');
            $table->tinyInteger('cron_active')->default(0);
            $table->tinyInteger('show_on_bonus_menu')->default(0);
            $table->integer('value')->default(0);
            $table->integer('pin_ratio')->default(0);
            $table->integer('max_level')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlm_config');
    }
};
