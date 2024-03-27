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
        Schema::create('site_business_page', function (Blueprint $table) {
            $table->integer('page_id', true);
            $table->mediumText('page_content');
            $table->integer('page_category_id');
            $table->string('page_image', 50)->default('');
            $table->dateTime('page_datetime')->nullable();
            $table->integer('page_order_by')->comment('urutan marketing plan');
            $table->tinyInteger('page_is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_business_page');
    }
};
