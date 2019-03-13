<?php
//summission
if(isset($_POST['upload'])){
    echo'ok'. '<br>';
    //var_dump($_FILES);
    $file_name=$_FILES['fichier']['name'];
    $file_tmp_name=$_FILES['fichier']['tmp_name'];
    $destination ='images/'.$file_name;

    if(move_uploaded_file($file_tmp_name, $destination)){
        echo ' fichier téléchargé...';

        //header('location:https://www.amat-rh.com');
    };
    if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pwd'])){
        $login = htmlspecialchars (trim(addslashes($_POST['login'])));  
        $pwd = md5(htmlspecialchars (trim(addslashes($_POST['pwd']))));
        echo ' données prêtes pour la base de données ' . $login. ' '.$pwd ;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichier dans le PHP</title>
</head>
<body>
<p>Envoie du fichier</p>
    <form action ="" method="post" enctype="multipart/form-data">
    Login: <input type="texte" name="login" maxlength =5><br><br>
    Password: <input type="password" name="pwd"><br><br>
    
    <input type="file" name="fichier"><br><br>

    <input type="submit" name="upload" value="Summettre">
    </form>

    
</body>
</html>