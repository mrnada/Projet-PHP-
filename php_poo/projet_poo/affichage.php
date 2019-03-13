<?php
//Liaison des fichiers nécessaires
    require_once('connex.php');
    require_once('Entity.class.php');
    require_once('Driver.class.php');

    $driver =new Driver($conn); //tout les données sont disponible
    $datas =$driver->findAll(); //dans le datas est tout stocké
    //var_dump ($datas);
    
?>

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
    <table classe="table table-striped">
        <thead>
            <tr><th>ID</th></th><th>NOM</th><th>PRENOM</th><th>AGE</th><th>LANGUE</th><th>ACTION</th></tr>        
        </thead>  
        <tbody>
        <?php foreach($datas as $data){?>
            <tr>
            <td><?php echo $data->getId(); ?></td>
            <td><?php echo $data->getNom(); ?></td>
            <td><?php echo $data->getPrenom(); ?></td>
            <td><?php echo $data->getAge(); ?></td>
            <td><?php echo $data->getLangue(); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data->getId();?>">EDITER </a>
                <a href="delete.php?id=<?php echo $data->getId();?>">SUPPRIMER</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
        </div>
    </table>
</body>
</html>