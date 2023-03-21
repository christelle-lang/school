@extends('template')
@section('contenue')
@section('styleaffiche')
   <link rel="stylesheet" href="{{asset('css/affiche.css')}}">
@endsection
<body>
    <h3>LISTE DES PROFESSEURS</h3>
    <table>
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Cours</th>
                <th class="action">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($prof as $professeur)
            <tr>
                <td>{{ $professeur->id }}</td>
                <td>{{ $professeur->nom }}</td>
                <td>{{ $professeur->prenom }}</td>
                <td>{{ $professeur->email }}</td>
                <td>{{ $professeur->password }}</td>
                <td>{{ $professeur->Cours }}</td>
                <td class="action">
                    <form action="{{ route('prof.supprimer', ['id' => $professeur->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="supprime" type="submit" value="Supprimer">
                    </form> 
                    
                   <form action="{{ route('prof.edit', ['id' => $professeur->id]) }}" method="get">
                     @csrf
                     @method('UPDATE')
                     <input class="modifie" type="submit" value="Modifier">
                   </form>  
                </td>  
            </tr>
             
            @endforeach
        </tbody>
    </table>

@endsection
