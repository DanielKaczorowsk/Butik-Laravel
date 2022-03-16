<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ButikCreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
          Schema::create('produkt', function (Blueprint $table) {
              $table->increments('id');
              $table->string('typ');
              $table->string('marka');
              $table->double('cena');
              $table->float('promocja');
              $table->integer('ilosc_na_stanie');
              $table->string('img');
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
          Schema::dropIfExists('produkt');
        }
    }
