@extends("template")
@section("contenue")
@section("styleajoue")
   <link rel="stylesheet" href="{{asset('css/ajoue.css')}}">
@endsection

@section("jsajoue")
      <script src="{{asset('js/ajoue.js')}}"></script>
@endsection

    <div class="container">
        <form action="{{route('cours.modifie')}}" method="POST">
         
                <h2>Modifier des cours</h2>
                 @csrf
                <div >
                    <label for="id">id :</label>
                    <input  onclick="cliquer()" class="champ"  type="number" name="id" value="{{ $data->id }}">
                </div>

                <div >
                    <label for="nom">Nom :</label>
                    <input type="nom" name="nom" value="{{ $data->nom }}">
                </div>

                <div >
                    <label for="info">info:</label>
                    <input type="info" name="info" value="{{ $data->info}}">
                </div>
                <div >
                    <label for="image">info:</label>
                    <input type="file" id="input-file" name="image" onchange="previewImage(event)" value="{{ $data->image}}" >
                  
                </div>
             
                <div class="d-flex justify-content-center ">
                <img id="preview" src="#" alt="Aperçu de l'image" width="320px" height="150px">
                 </div>
               
                <div class="bouton">
                    <input class="buton" type="submit" value="MODIFIER">
                </div>
               
           
        </form>
    </div>
 @endsection  
