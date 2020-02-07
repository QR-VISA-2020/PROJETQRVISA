<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Etudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //
         Schema::create('etudiant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule', 10)->unique();
            $table->string('NOM', 100);
            $table->char('SEXE', 1);
            $table->string('PERE', 50);
            $table->string('MERE', 50);
            $table->string('ADRESSE', 100);
            $table->string('DATENAISSANCE', 30);
            $table->char('CODNAT', 5);
            $table->char('CODPROVINCE', 5);
            $table->string('VILLENAISSANCE', 100);
            $table->string('DIPLOME', 50);
            $table->integer('SESSION');
            $table->dateTime('DATEINS');
            $table->char('LANGUE', 1);
            $table->enum('REFUGIE', ['0', '1']);
            $table->enum('HANDICAPE', ['0', '1']);
            
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
       Schema::dropIfExists('etudiant');
    }
}
