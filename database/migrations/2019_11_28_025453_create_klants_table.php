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
            $table->integer('klanten_id');
            $table->string('klanten_bedrijf_naam');
            $table->string('klanten_contact_persoon');
            $table->string('klanten_adress');
            $table->integer('klanten_postcode');
            $table->string('klanten_woonplaats');
            $table->integer('klanten_telefoon');
            $table->integer('klanten_fax');
            $table->integer('klanten_mobiel');
            $table->string('email');
            $table->string('klanten_website');
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
