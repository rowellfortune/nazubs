<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bedrijf_naam');
            $table->string('contact_persoon');
            $table->string('adres');
            $table->integer('postcode');
            $table->string('woonplaats');
            $table->integer('telefoon');
            $table->integer('fax');
            $table->integer('mobiel');
            $table->string('email');
            $table->string('website');
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
        Schema::dropIfExists('klanten');
    }
}
