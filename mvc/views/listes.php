<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<a href="index.php?action=add">Ajouter</a>

<table class="table table-striped">
    <thead>
        <tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Actions</th></tr>
    </thead>
    <tbody>
    <?php  foreach($datas as $data){  ?> <!--Data elements à parcourir. Ouverture du balayage des données-->
        <tr>
        <!-- GetId on veux l'obtenir car ils sont en private -->
            <td><?php echo $data->getId(); ?></td>
            <td><?php echo $data->getNom(); ?></td>
            <td><?php echo $data->getPrenom(); ?></td>
            <td><?php echo $data->getAge(); ?></td>
            <td>
                <a data-toggle="modal" data-target="#myModal" href="index.php"<?php echo $data->getId();?>>Détail</a>
                <a href="index.php?action=edit&id=<?php echo $data->getId(); ?>">Editer</a>
                <!-- Fond controler = index puis 1er paramètre Delete -->
                <a href="index.php?action=delete&id=<?php echo $data->getId(); ?>">Supprimer</a>
            </td>
             <?php require_once('modal.php');?>
        </tr>
    <?php } ?>
    </tbody>
    </div>

</table>
    
</body>
</html>