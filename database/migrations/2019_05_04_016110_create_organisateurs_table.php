<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 45);
            $table->string('prenom', 45);
            $table->string('email', 45);
            $table->string('telephone', 15);
            $table->string('entreprise', 45);
            $table->string('password', 45);
            $table->unsignedBigInteger('ville_id');
            $table->timestamps();

            $table->foreign('ville_id')
                    ->references('id')
                    ->on('villes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisateurs');
    }
}
