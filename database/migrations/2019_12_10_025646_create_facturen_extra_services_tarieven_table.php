<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturenExtraServicesTarievenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturen_extra_services_tarieven', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facturen_id');
            $table->integer('extra_services_id');
            $table->integer('contact_name');
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
        Schema::dropIfExists('facturen_extra_services_tarieven');
    }
}
