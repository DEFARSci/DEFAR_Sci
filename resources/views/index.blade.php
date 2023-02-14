<<<<<<< HEAD
@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td >Show</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>

    <tbody>
        @foreach($entretiens as $entretien)
        <tr>
             <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>

            <td><a href="{{ route('entretiens.show', $entretien->id)}}" class="btn btn-info">Show</a></td>

             <td><a href="{{ route('entretiens.edit', $entretien->id)}}" class="btn btn-primary" >Edit</a></td>

            <td>
                <form action="{{ route('entretiens.destroy', $entretien->id)}}" method="post">
=======


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
>>>>>>> backend
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
<<<<<<< HEAD
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
=======
           
           
    </tr>

     @endforeach
   
  </tbody>
</table>


      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
   









>>>>>>> backend
