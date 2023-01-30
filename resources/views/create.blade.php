
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entretiens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <h3>Add Entretiens</h3>
    <a href="{{ route('create') }}" ></a>
<form method="POST" action="{{ route('create') }}" enctype="multipart/form-data" >

    @csrf
    
   <div class="form-group>
    <label for="name" >Nom: </label>
    <input type="text" class="form-control" name="nom" />
</div> 

<div class="form-group>
    <label for="name" >Prenom: </label>
    <input type="text" class="form-control" name="prenom" />
</div> 

<div class="form-group>
    <label for="name" >Email: </label>
    <input type="text" class="form-control" name="email" />
</div> 
<div class="form-group>
    <label for="name" >Telephone: </label>
    <input type="tel" class="form-control" name="telephone" />
</div> 

<div class="form-group>
    <label for="name" >Adresse: </label>
    <input type="text" class="form-control" name="adresse" />
</div> 

<div class="form-group>
    <label for="name" >Date_debut </label>
    <input type="text" class="form-control" name="date" />
</div> 
<div class="form-group>
    <label for="name" >Date_fin: </label>
    <input type="text" class="form-control" name="date" />
</div> 

<div class="form-group>
    <label for="name" >Participants: </label>
    <input type="text" class="form-control" name="participant" />
</div> 
<div class="form-group>
    <label for="name" >Connaissez_vous_defarcsi: </label>
    <input type="text" class="form-control" name="name" />
</div> 

<div class="form-group>
    <label for="name" >Comment_voyez_vous_defarsci: </label>
    <input type="text" class="form-control" name="name" />
</div> 
<div class="form-group>
    <label for="name" >Presentation: </label>
    <input type="text" class="form-control" name="name" />
</div> 

<div class="form-group>
    <label for="name" >Qu_enttendez_de_defarsci: </label>
    <input type="text" class="form-control" name="name" />
</div> 
<div class="form-group>
    <label for="name" >Atouts: </label>
    <input type="text" class="form-control" name="atouts" />
</div> 

<div class="form-group>
    <label for="name" >Faiblesses: </label>
    <input type="text" class="form-control" name="faiblesse" />
</div> 
<div class="form-group>
    <label for="name" >Maladie_ou_Allergie: </label>
    <input type="text" class="form-control" name="name" />
</div> 

<div class="form-group>
    <label for="name" >objectifs_dans_2ans: </label>
    <input type="text" class="form-control" name="name" />
</div> 
<div class="form-group>
    <label for="name" >mois_de_formation: </label>
    <input type="text" class="form-control" name="name" />
</div> 

<div class="form-group>
    <label for="name" >demarrage: </label>
    <input type="text" class="form-control" name="description" />
</div> 
<div class="form-group>
    <label for="name" >heure_d_arriver: </label>
    <input type="text" class="form-control" name="year" />
</div> 

<div class="form-group>
    <label for="name" >heure_petit_dejeuner: </label>
    <input type="text" class="form-control" name="description" />
</div> 
<div class="form-group>
    <label for="name" >heure_pause: </label>
    <input type="text" class="form-control" name="year" />
</div> 

<div class="form-group>
    <label for="name" >modalite_paiement: </label>
    <input type="text" class="form-control" name="description" />
</div> 


<button type="submit" class="btn btn-primary" >Add Entretien</button>



</form>


    


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>