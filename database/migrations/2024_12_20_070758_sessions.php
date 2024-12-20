<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // CREATE TABLE `sessions` (
    //     `id` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
    //     `user_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
    //     `ip_address` VARCHAR(45) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
    //     `user_agent` TEXT NULL DEFAULT NULL COLLATE 'utf8_general_ci',
    //     `payload` LONGTEXT NOT NULL COLLATE 'utf8_general_ci',
    //     `last_activity` INT(11) NOT NULL,
    //     PRIMARY KEY (`id`) USING BTREE,
    //     INDEX `sessions_user_id_index` (`user_id`) USING BTREE,
    //     INDEX `sessions_last_activity_index` (`last_activity`) USING BTREE
    // )
    // COLLATE='utf8_general_ci'
    // ENGINE=InnoDB
    // ;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity');

            $table->index('user_id');
            $table->index('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
