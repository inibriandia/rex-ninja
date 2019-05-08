<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('villes');
        Schema::create('villes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ville');
            $table->unsignedBigInteger('province_id');

            $table->foreign('province_id')
                    ->references('id')
                    ->on('Provinces')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes');
    }
}
