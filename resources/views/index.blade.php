

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entretiens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

     <h3>Entretiens list</h3>

      <div class="container">
      
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody >

    @foreach ($entretiens as $entretien)
        
   

    <tr>
      <th scope="row">{{ $entretien->id }}</th>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>
      <td>{{ $entretien->email }}</td>
      <td>{{ $entretien->telephone }}</td>
      <td>{{ $entretien->adresse}}</td>
      <td>{{ $entretien->date_debut}}</td>
      <td>{{ $entretien-> date_fin}}</td>
      <td>{{ $entretien->participant }}</td>
      <td>{{ $entretien->connaissez_vous_defarcsi}}</td>
      <td>{{ $entretien->comment_voyez_vous_defarsci}}</td>
      <td>{{ $entretien->presentation }}</td>
      <td>{{ $entretien->qu_enttendez_de_defarsci }}</td>
      <td>{{ $entretien->atouts}}</td>
      <td>{{ $entretien->faiblesses}}</td>
      <td>{{ $entretien-> maladie_ou_allergie}}</td>
      <td>{{ $entretien->objectifs_dans_2ans }}</td>
      <td>{{ $entretien->mois_de_formation}}</td>
      <td>{{ $entretien->demarrage}}</td>
      <td>{{ $entretien->heure_d_arrive }}</td>
      <td>{{ $entretien->heure_petit_dejeuner }}</td>
      <td>{{ $entretien->heure_pause}}</td>
      <td>{{ $entretien->modalite_paiement}}</td>
      
      
        <td>
            
                <a class="btn btn-info" href="{{ route('show', ['id'=>$entretien->id])}}">Show</a>

            
        </td>

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="{{ route('edit_entretien', $entretien->id)}}">Edit</a>

            </form>
        </td>


            


            <td>
                <form action="{{ route('delete_entretien', $entretien->id)}}" method="post">

                 <a class="btn btn-primary" href="{{ route('delete_entretien', $entretien->id)}}">Delete</a>
                </form>
            </td>
           
    </tr>

     @endforeach
   
  </tbody>
</table>


      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
   









