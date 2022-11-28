<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 30);
            $table->string('prenom', 30);
            $table->date('anniversaire');
            $table->text('adresse', 100);
            $table->string('code_postal', 100);
            $table->string('ville', 30);
            $table->string('telephone');
            $table->string('cellulaire');
            $table->bigInteger('utilisateurId')->unsigned();
            $table->foreign('utilisateurId')->references('id')->on('utilisateurs');
            $table->bigInteger('provinceId')->unsigned();
            $table->foreign('provinceId')->references('id')->on('provinces');
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
        Schema::dropIfExists('profils');
    }
}
