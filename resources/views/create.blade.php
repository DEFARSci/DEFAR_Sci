
 @extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter un Entretien
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('entretiens.store') }}">
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
    <input type="text" class="form-control" name="addresse" />
</div> 

<div class="form-group>
    <label for="name" >Date_debut </label>
    <input type="date" class="form-control" name="date_debut" />
</div> 
<div class="form-group>
    <label for="name" >Date_fin: </label>
    <input type="date" class="form-control" name="date_fin" />
</div> 

<div class="form-group>
    <label for="name" >Participants: </label>
    <input type="text" class="form-control" name="participant" />
</div> 
<div class="form-group>
    <label for="name" >Connaissez_vous_defarcsi: </label>
    <input type="text" class="form-control" name="defarcsi" />
</div> 

<div class="form-group>
    <label for="name" >Comment_voyez_vous_defarsci: </label>
    <input type="text" class="form-control" name="comment_voyez_vous_defarsci" />
</div> 
<div class="form-group>
    <label for="name" >Presentation: </label>
    <input type="text" class="form-control" name="presentation" />
</div> 

<div class="form-group>
    <label for="name" >Qu_enttendez_de_defarsci: </label>
    <input type="text" class="form-control" name="qu_enttendez_de_defarsci" />
</div> 
<div class="form-group>
    <label for="name" >Atouts: </label>
    <input type="text" class="form-control" name="atouts" />
</div> 

<div class="form-group">
    <label for="name" >Faiblesses: </label>
    <input type="text" class="form-control" name="faiblesses" />
</div> 

<fieldset class="form-group">
    <div class="row">
        <label for="name"> </label>
     <input type="text" class="form-control" name="maladie_ou_allergie" />
      <legend class="form-group">Maladie_ou_allergie</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="oui" checked>
          <label class="form-check-label" for="gridRadios1">
            oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="non">
          <label class="form-check-label" for="gridRadios2">
           non
          </label>
        </div>
  </fieldset>

<div class="form-group>
    <label for="name" >objectifs_dans_2ans: </label>
    <input type="text" class="form-control" name="objectifs_dans_2ans" />
</div> 
<div class="form-group>
    <label for="name" >mois_de_formation: </label>
    <input type="text" class="form-control" name="mois_de_formation" />
</div> 

<div class="form-group>
    <label for="name" >demarrage: </label>
    <input type="date" class="form-control" name="demarrage" />
</div> 
<div class="form-group>
    <label for="name" >heure_d_arriver: </label>
    <input type="time" class="form-control" name="heure_d_arriver" />
</div> 

<div class="form-group>
    <label for="name" >heure_petit_dejeuner: </label>
    <input type="time" class="form-control" name="heure_petit_dejeuner" />
</div> 
<div class="form-group>
    <label for="name" >heure_pause: </label>
    <input type="time" class="form-control" name="heure_pause" />
</div> 

<div class="form-group>
    <label for="name" >modalite_paiement: </label>
    <input type="text" class="form-control" name="modalite_paiement" />
</div> 


<button type="submit" class="btn btn-primary" >Ajouter Entretien</button>



</form>

@endsection


    


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>