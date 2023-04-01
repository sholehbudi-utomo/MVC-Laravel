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
        Schema::table('producs', function (Blueprint $table) {
            $table->foreIgnid('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('categoris');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('producs', function (Blueprint $table) {
            $table->dropColumn('kategori_id');
        });
    }
};
