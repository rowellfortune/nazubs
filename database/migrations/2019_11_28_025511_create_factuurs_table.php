<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactuursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facturen_id');
            $table->char('facturen_invoice_nummer');
            $table->date('facturen_datum');
            $table->char('klanten_contact_persoon');
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
        Schema::dropIfExists('facturen');
    }
}
