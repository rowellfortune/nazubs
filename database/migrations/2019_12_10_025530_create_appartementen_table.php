<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartementenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartementens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('appartementen_id');
            $table->integer('status_id')->index()->unsigned()->nullable();
            $table->string('name');
            $table->integer('prijs');
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
        Schema::dropIfExists('appartementens');
    }
}
