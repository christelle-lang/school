<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  @if (isset($post))
     <form action="{{ route('cours.supprimer', $cours->id) }}" method="POST">
       @csrf
       @method('DELETE')
     <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
  @else
     <p>Aucune entrée de base de données à supprimer.</p>
  @endif
</body>
</html>


