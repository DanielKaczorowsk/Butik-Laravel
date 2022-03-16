<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KoszykTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('koszyk', function (Blueprint $table) {
          //$table->unsignedInteger('id_uzytkownik');
            $table->unsignedInteger('id');
            $table->unsignedInteger('id_produktu');
            $table->unsignedInteger('id_users');
            $table->unsignedInteger('ilosc');
            $table->double('cena');
            $table->foreign('id_produktu')->references('id')->on('produkt')->onDelete('CASCADE');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('CASCADE');
          //$table->primary(['id_uzytkownik','id_produktu']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('koszyk');
    }
}
