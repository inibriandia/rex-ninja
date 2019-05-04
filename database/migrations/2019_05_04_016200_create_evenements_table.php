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

            $table->unsignedBigInteger('organisateur_id');
            $table->unsignedBigInteger('ville_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('ambiance_id');
            $table->unsignedBigInteger('categorieAge_id');

            $table->foreign('organisateur_id')
                ->references('id')
                ->on('organisateurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            /*$table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/

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
