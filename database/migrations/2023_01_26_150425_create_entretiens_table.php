<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntretiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('addresse');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('participant');
            $table->string('connaissez_vous_defarcsi');
            $table->string('comment_voyez_vous_defarsci');
            $table->string('presentation');
            $table->string('qu_enttendez_de_defarsci');
            $table->string('atouts');
            $table->string('faiblesses');
            $table->string('maladie_ou_allergie');
            $table->string('objectifs_dans_2ans');
            $table->string('mois_de_formation');
            $table->string('demarrage');
            $table->date('heure_d_arriver');
            $table->date('heure_petit_dejeuner');
            $table->date('heure_pause');
            $table->integer('modalite_paiement');
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
        Schema::dropIfExists('entretiens');
    }
}
