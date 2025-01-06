<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // add description. add is_saved, is_published
        Schema::table('custom_models', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->boolean('is_saved')->default(false);
            $table->boolean('is_published')->default(false);
            // change image to text
            $table->longText('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('custom_models', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('is_saved');
            $table->dropColumn('is_published');
        });
    }
};
