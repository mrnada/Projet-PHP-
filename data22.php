
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>     
    <table class="table table-striped">
    <tr>
        <th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Id_Langue</th>
    </tr>
    <?php
        require('ex22.php');
        while($donnees = mysqli_fetch_assoc($res)){
    ?>
    <tr>
    <td><?php echo $donnees['Id_personne'];?></td>
    <td><?php echo $donnees['Nom'];?></td>
    <td><?php echo $donnees['Prenom'];?></td>
    <td><?php echo $donnees['Age'];?></td>
    <td><?php echo $donnees['Id_Langue'];?></td>
    </tr>
    <?php } ?>
    </table>
    </div>
</body>
</html>