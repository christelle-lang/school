@extends("template")
@section("contenue")
@section("styleajoue")
   <link rel="stylesheet" href="{{asset('css/ajoue.css')}}">
@endsection
    <div class="container">
        <form action="{{route('page.affiche.prof')}}" method="POST">
         
                <h2>Ajoue de Professeur</h2>
                 @csrf
                <div >
                     <label for="nom">Nom :</label>
                     <input onclick="cliquer()" class="champ" name="nom" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
                </div>
                <div >
                    <label for="prenom">Prenom :</label>
                    <input onclick="cliquer()" class="champ" name="prenom" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
               </div>
               <div >
                <label for="email">Email :</label>
                <input onclick="cliquer()" class="champ" name="email" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
              </div>
              <div >
                <label for="pass">Mot de passe :</label>
                <input onclick="cliquer()" class="champ" name="pass" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
             </div>
             <div >
                <label for="cours">Cours :</label>
                <input onclick="cliquer()" class="champ" name="cours" placeholder="Entrez le nom du cours"   type="text"  id="nom" required>
             </div>
                
                <div class="bouton">
                    <input class="buton" type="submit" value="AJOUTER">
                </div>
               
           
        </form>
    </div>
    <script src="js/ajoue.js"></script>
@endsection 