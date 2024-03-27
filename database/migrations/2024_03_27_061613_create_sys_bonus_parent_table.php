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
        Schema::create('sys_bonus_parent', function (Blueprint $table) {
            $table->comment('summary bonus');
            $table->unsignedInteger('bonus_parent_member_id')->default(0)->primary()->comment('ID Member');
            $table->unsignedBigInteger('bonus_parent_sponsor_acc')->default(0)->comment('Bonus Sponsor Didapatkan');
            $table->unsignedBigInteger('bonus_parent_sponsor_paid')->default(0);
            $table->unsignedBigInteger('bonus_parent_sponsor_gen_acc')->nullable()->default(0);
            $table->unsignedBigInteger('bonus_parent_sponsor_gen_paid')->nullable()->default(0);
            $table->unsignedBigInteger('bonus_parent_match_acc')->default(0);
            $table->unsignedBigInteger('bonus_parent_match_paid')->default(0);
            $table->unsignedBigInteger('bonus_parent_match_gen_acc')->nullable()->default(0);
            $table->unsignedBigInteger('bonus_parent_match_gen_paid')->nullable()->default(0);
            $table->unsignedBigInteger('bonus_parent_cashback_acc')->default(0);
            $table->unsignedBigInteger('bonus_parent_cashback_paid')->default(0);
            $table->unsignedBigInteger('bonus_parent_acc')->default(0);
            $table->unsignedBigInteger('bonus_parent_paid')->default(0);
            $table->unsignedBigInteger('bonus_parent_limit')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_bonus_parent');
    }
};
