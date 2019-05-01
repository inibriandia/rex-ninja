<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre', 45);
            $table->mediumText('description');
            $table->date('dateDebut');
            $table->time('heureDebut');
            $table->date('dateFin');
            $table->time('heureFin');
            $table->string('telephone', 15);
            $table->string('image');
            $table->string('lienFacebook');
            $table->string('numeroMaison');
            $table->string('nomRue');
            $table->string('descriptionAdresse');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('prix');
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
        Schema::dropIfExists('evenements');
    }
}
