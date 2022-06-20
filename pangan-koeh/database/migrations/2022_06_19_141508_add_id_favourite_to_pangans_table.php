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
        Schema::table('pangans', function (Blueprint $table) {
            $table->foreignId('id_favourite');
            $table->index('id_favourite')->nullable();
            $table->foreign('id_favourite')->references('id')->on('favourites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pangans', function (Blueprint $table) {
            $table->dropColumn('id_favourite');
        });
    }
};
