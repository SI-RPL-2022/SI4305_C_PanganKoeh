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
        Schema::create('ngansars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasar');
            $table->index('id_pasar');
            $table->foreign('id_pasar')->references('id')->on('markets')->onDelete('cascade');
            $table->foreignId('id_komoditas');
            $table->index('id_komoditas');
            $table->foreign('id_komoditas')->references('id')->on('pangans')->onDelete('cascade');
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
