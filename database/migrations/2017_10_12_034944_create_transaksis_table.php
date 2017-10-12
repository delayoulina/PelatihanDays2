<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_homestay');
            $table->integer('id_user');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->integer('total_harga');            
            $table->timestamps();

            // $table->foreign('id_homestay')->references('id')->on('home_stays');
            // $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
