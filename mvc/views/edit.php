<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Editer</title>
</head>
<body>
    
<div class="container">
<!-- //Requete ecrite dans Driver.class -->
<h2>Editer</h2>
<form action="" method="POST">
<div class="form-group">
    <label for="nom">Id</label>
    <p> <?=$_GET['Id_personne']; ?></p>
    <!-- On utilise getNom car c'est un privé donc c'est un getter -->
    <!-- <input type="text" class="form-control" name="nom" placeholder="Nom"> -->
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <!-- On utilise getNom car c'est un privé donc c'est un getter -->
    <input type="text" class="form-control" name="nom" value="<?=$contenu->getNom(); ?>" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" name="prenom" value="<?=$contenu->getPrenom(); ?>" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" value="<?=$contenu->getAge(); ?>" placeholder="Age">
  </div>
  <button type="submit" class="btn btn-success">Ajouter</button>
</form>
</div>

</body>
</html>
