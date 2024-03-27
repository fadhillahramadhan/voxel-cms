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
        Schema::create('sys_bonus_mutation', function (Blueprint $table) {
            $table->comment('Riwayat bonus');
            $table->increments('bonus_mutation_id');
            $table->unsignedInteger('bonus_mutation_parent_member_id')->comment('ID Member');
            $table->unsignedInteger('bonus_mutation_member_id')->index('bonus_log_member_id')->comment('ID Member');
            $table->unsignedInteger('bonus_mutation_value')->default(0)->comment('Nominal');
            $table->enum('bonus_mutation_type', ['in', 'out'])->default('in');
            $table->string('bonus_mutation_note')->default('')->comment('Keterangan');
            $table->date('bonus_mutation_date');
            $table->dateTime('bonus_mutation_datetime')->comment('Tanggal Kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_bonus_mutation');
    }
};
