<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');


$driver = new Driver($conn);
//Affichage du contenu
$contenu = $driver->edit($_GET['Id_personne']);

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
    $id = (int)$_GET['Id_personne'];
    
    $driver->updateItem($entity, $id);
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
<h2>Formulaire</h2>
<form action="" method="POST">
     <!-- syntaxe contractée  -->
    <div>Id<?=$contenu->getId(); ?></div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <!-- On utilise getNom car c'est un privé donc c'est un getter -->
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="<?php echo $contenu->getNom() ?>">
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="<?php echo $contenu->getPrenom() ?>">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="<?php echo $contenu->getAge() ?>">
  </div>
  <button type="submit" class="btn btn-warning">Modifier</button>
</form>
</div>

</body>
</html>