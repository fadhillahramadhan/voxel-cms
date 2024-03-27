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
        Schema::create('site_testimony', function (Blueprint $table) {
            $table->comment('data testimoni member');
            $table->increments('testimony_id');
            $table->unsignedInteger('testimony_member_id')->comment('ID Member');
            $table->char('testimony_network_code', 20)->default('')->comment('Kode Member');
            $table->mediumText('testimony_content')->comment('Isi Testimoni');
            $table->unsignedTinyInteger('testimony_is_publish')->default(1)->index('testimony_is_active')->comment('Status Publish');
            $table->date('testimony_date')->comment('Tanggal Testimoni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_testimony');
    }
};
