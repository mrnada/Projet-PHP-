<?php
require_once('connex.php');
require_once('Entity.class.php');
require_once('Driver.class.php');

//données disponibles et on va pouvoir les récupérer avec $driver
$driver = new Driver($conn);
$datas=$driver->findAll();
// var_dump($datas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a href="ajout.php">Ajouter</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th><th>Nom</th><th>Prénom</th><th>Age</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
<!-- data elements à parcourir -->
<?php foreach($datas as $data) {?>
        <tr>
        <!-- getId on veut l'obtenir car ils st en private -->
        <td><?php echo $data->getId() ?></td>
        <td><?php echo $data->getNom() ?></td>
        <td><?php echo $data->getPrenom() ?></td>
        <td><?php echo $data->getAge() ?></td>
        <td>
        <a href="edit.php?Id_personne=<?php echo $data->getId() ?>">Editer</a>
        <a href="delete.php?Id_personne=<?php echo $data->getId() ?>">supprimer</a>
        </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>