@extends('template')
@section('contenue')
@section('styleaffiche')
   <link rel="stylesheet" href="css/affiche.css">
@endsection
@section('jsaffiche')
      <script src="{{asset('js/affiche.js')}}"></script>
@endsection
<body>
    <h3>LISTE DES COURS</h3>
    <table>
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Image</th>
                <th class="action">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($cours as $cour)
            <tr>
                
                <td>{{ $cour->id }}</td>
                <td>{{ $cour->nom }}</td>
                <td>{{ $cour->info }}</td>
                {{-- {{$data=[]}}
                 {{$data=json_decode($cour->image)}}
                 {{dd($data)}}
                <td> --}}
                <td>   
                 @foreach( json_decode($cour->image) as $img)
                 <div class="carousel">
                    <div class="carousel-container">
                      <div class="carousel-slide">
                        <img src="{{asset($img)}}" alt="image" height="65px" width="150px">
                      </div>
                    </div>
                </div>
                @endforeach
               </td>
                <td class="action">
                    <form action="{{ route('cours.supprimer', ['id' => $cour->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="supprime" type="submit" value="Supprimer">
                     </form> 
                    
                   <form action="{{ route('cours.edit', ['id' => $cour->id]) }}" method="get">
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
