<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAstreintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('astreintes', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date_debut');
            $table->datetime('date_fin');
            $table->string('durée');
            $table->integer('type_astreinte_id');
            $table->integer('user_id');
            $table->integer('etat_id');
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
        Schema::dropIfExists('astreintes');
    }
}
