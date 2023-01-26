<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;

    protected $filable = [

    	'nom',
    	'prenom',
         'email',
          'telephone',
            'addresse',
            'date_debut',
            'date_fin',
            'participant',
           'connaissez_vous_defarcsi',
            'comment_voyez_vous_defarsci',
            'presentation',
            'qu_enttendez_de_defarsci',
            'atouts',
            'faiblesses',
            'maladie_ou_allergie',
            'objectifs_dans_2ans',
            'mois_de_formation',
            'demarrage',
       		'heure_d_arriver',
            'heure_petit_dejeuner',
            'heure_pause',
            'modalite_paiement',





    ]
}
