<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->date('annee');
            /* photo */
            $table->string('photo', 100);
            
            $table->date('date_arrivee');
            /* prix */
            $table->double('prix');
           
            $table->string('transmission', 30);
            $table->string('corps', 30);

            /* description? */
            $table->text('descripton', 2000);

            /* marque */
            $table->bigInteger('constructeurId')->unsigned();
            $table->foreign('constructeurId')->references('id')->on('constructeurs');
            $table->bigInteger('modeleId')->unsigned();
            $table->foreign('modeleId')->references('id')->on('modeles');

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
        Schema::dropIfExists('voitures');
    }
}
