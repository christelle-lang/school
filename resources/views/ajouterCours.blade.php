@section("styleajoue")
   <link rel="stylesheet" href="{{asset('css/ajoue.css')}}">
@endsection
@section("jsajoue")
      <script src="{{asset('js/ajoue.js')}}"></script>
@endsection
@extends("template")
@section("contenue")
        <form action="{{route('page.affiche.cours')}}" method="POST"  enctype="multipart/form-data">
                <div>
                   <h2>Ajoue de cours</h2>
                   @csrf
                   <div >
                     <label for="nom">Nom du cours :</label>
                     <input onclick="cliquer()" class="champ" name="nom" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
                  </div>

                  <div >
                    <label for="info">information cours :</label>
                    <textarea onclick="cliquer()"  class="champ" name="info" placeholder="Entrez les infos du cours" id="info" cols="30" rows="-10" required></textarea>
                  </div>

                  <div>
                    <label for="image">Image</label>
                    <input type="file" id="input-file" name="image" onchange="previewImage(event)">
                  </div>

                  <div class="d-flex justify-content-center ">
                   <img id="preview" src="#" alt="Aperçu de l'image" width="320px" height="150px">
                  </div>

                    <div>
                    <label for="selectedItems">Selected Items:</label>
                    <select name="selectedItems" id="selectedItems" multiple>
                        <option value="item1">Item 1</option>
                        <option value="item2">Item 2</option>
                        <option value="item3">Item 3</option>
                        <option value="item4">Item 4</option>
                    </select>
                   </div>
                
                <div class="bouton">
                   <input class="buton" type="submit" value="AJOUTER"> 
                </div>    
            </div>
        </form>
@endsection 