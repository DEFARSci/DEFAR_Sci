
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entretiens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body> 

<h3>Enretien Details</h3>
<div class="float-end">
                   
   <a  href="{{ route('show', ['id'=>$entretien->id])}}"></a>
            </div>
<table style="border:0px;">
    <tr>

    <td>

        <p><b class="lbl">ID :</b>{{ $entretien->id }}</p>
        <p><b class="lbl">Nom :</b>{{ $entretien->nom }}</p>
        <p><b class="lbl">Prenom :</b>{{ $entretien->prenom }}</p>
        <p><b class="lbl">Email :</b>{{ $entretien->email }}</p>
        <p><b class="lbl">Telephone :</b>{{ $entretien->telephone }}</p>
        <p><b class="lbl">Date_debut :</b>{{ $entretien->date_debut }}</p>
        <p><b class="lbl">Date_fin :</b>{{ $entretien->date_fin }}</p>
        <p><b class="lbl">Participant :</b>{{ $entretien->participant}}</p>
        <p><b class="lbl">Connaissez_vous_defarcsi :</b>{{ $entretien->connaissez_vous_defarcsi }}</p>
        <p><b class="lbl">Comment_voyez_vous_defarsci :</b>{{ $entretien->comment_voyez_vous_defarsci }}</p>
        <p><b class="lbl">Presentation :</b>{{ $entretien->presentation }}</p>
        <p><b class="lbl">Qu_enttendez_de_defarsci :</b>{{ $entretien->qu_enttendez_de_defarsci }}</p>
        <p><b class="lbl">Atouts :</b>{{ $entretien->atouts }}</p>
        <p><b class="lbl">Faiblesses :</b>{{ $entretien->faiblesses}}</p>
        <p><b class="lbl">Maladie_ou_allergie :</b>{{ $entretien->maladie_ou_allergie }}</p>
        <p><b class="lbl">Objectifs_dans_2ans :</b>{{ $entretien->objectifs_dans_2ans}}</p>
        <p><b class="lbl">Mois_de_formation:</b>{{ $entretien->mois_de_formation}}</p>
        <p><b class="lbl">Demarrage :</b>{{ $entretien->demarrage }}</p>
        <p><b class="lbl">Heure_d_arriver :</b>{{ $entretien->heure_d_arriver }}</p>
        <p><b class="lbl">Heure_petit_dejeuner:</b>{{ $entretien->heure_petit_dejeuner}}</p>
        <p><b class="lbl">Heure_pause :</b>{{ $entretien->heure_pause }}</p>
        <p><b class="lbl">Modalite_paiement :</b>{{ $entretien->modalite_paiement }}</p>

    </td>
   
    
    
</tr>

</table>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
   