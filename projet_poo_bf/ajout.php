<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');


$driver = new Driver($conn);

// var_dump($contenu);
// Ce que le user a soumis via champs de saisie on le met ds l'objet entity et on l'affiche
//grace à la super globale $_POST (set car privé)
if(isset($_POST) && !empty($_POST['nom'])){
    // var_dump($_POST);
    $entity = new Entity();

    //objet $entity est rempli par nom, prenom et age (input)
    $entity->setNom($_POST['nom']);
    $entity->setPrenom($_POST['prenom']);
    $entity->setAge($_POST['age']);
    
    //$nb retourne la valeur de l'id insérer dans l'url
    $nb = $driver->addItem($entity);
    if($nb!=0){
     header('location:index.php');   
    }else{
        echo('Erreur lors de l\'insertion');
    }
}
?>
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
<h2>Ajout</h2>
<form action="" method="POST">
  <div class="form-group">
    <label for="nom">Nom</label>
    <!-- On utilise getNom car c'est un privé donc c'est un getter -->
    <input type="text" class="form-control" name="nom" placeholder="Nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" placeholder="Age">
  </div>
  <button type="submit" class="btn btn-success">Ajouter</button>
</form>
</div>

</body>
</html>