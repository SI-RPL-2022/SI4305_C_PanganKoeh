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
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('id_pasar');
            $table->index('id_pasar');
            $table->foreign('id_pasar')->references('id')->on('markets')->onDelete('cascade');
            $table->foreignId('id_komoditas');
            $table->index('id_komoditas');
            $table->foreign('id_komoditas')->references('id')->on('pangans')->onDelete('cascade');
            $table->string('name');
            $table->string('harga');
            $table->string('tanggal');
            $table->string('kontributor');
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
