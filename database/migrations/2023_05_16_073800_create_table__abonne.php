<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Abonne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->integer('age');
            $table->char('sexe')->default('m');
            $table->string('profession');
            $table->string('rue');
            $table->string('codePostal');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone',100);
            $table->string('email');
            $table->unsignedInteger('idmotivation');
            $table->foreign('idmotivation')->references('id')->on('Motivation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Abonne');
    }
};
