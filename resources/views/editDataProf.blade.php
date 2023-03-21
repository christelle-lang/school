@extends('template')
@section('contenue')
@section('styleajoue')
   <link rel="stylesheet" href="{{asset('css/ajoue.css')}}">
@endsection

<div class="container">
    <form action="{{route('prof.modifie')}}" method="POST">
     
            <h2>Modifier des cours</h2>
             @csrf
    <div >
      <label for="id">id :</label>
      <input onclick="cliquer()" class="champ" type="number" name="id" value="{{ $data->id }}">
    </div>
    <div>
       <label for="nom">Nom :</label>
       <input onclick="cliquer()" class="champ" type="text" name="nom" value="{{ $data->nom}}">
    </div>
    <div>
       <label for="prenom">Prenom:</label>
       <input onclick="cliquer()" class="champ" type="text" name="prenom" value="{{ $data->prenom}}">
    </div>
    <div>
      <label for="email">Email:</label>
      <input onclick="cliquer()" class="champ" type="email" name="email" value="{{ $data->email}}">
    </div>
    <div>
      <label for="pass">Mot de passe:</label>
      <input onclick="cliquer()" class="champ" type="number" name="pass" value="{{ $data->password}}">
    </div>
    <div>
    <label for="cours">Cours:</label>
    <input onclick="cliquer()" class="champ" type="text" name="cours" value="{{ $data->Cours}}">
    </div>
    <div class="bouton">
        <input class="buton" type="submit" value="MODIFIER">
    </div>
</form>
 
@endsection