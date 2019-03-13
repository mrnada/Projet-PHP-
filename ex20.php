<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>La methode POST pour envoie les parametres par l'URL</p>
    <form action ="traitement2.php" method="POST"> 
        Nom: <input type="text" name="pseudo"><br>
        Age: <input type="text" name="age"><br>
        Pays: <input type="text" name="pays"><br>
        <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>-->




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>La methode POST pour envoie les parametres par l'URL</p>
    <form action ="traitement2.php" method="POST"> 
        Nom: <input type="text" name="pseudo"><br>
        Age: <input type="text" name="age"><br>
        Pays: <input type="text" name="pays"><br>
        Mot de passe: <input type="password" name="pwd"><br>
        <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>-->




<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>La methode POST pour envoie les parametres par l'URL</p>
    <form action ="traitement2.php" method="POST"> 
        Nom: <input type="text" name="pseudo"><br><br>
        Age: <input type="text" name="age"><br><br>
        Pays: <input type="text" name="pays"><br><br>
        Mot de passe: <input type="password" name="pwd"><br><br>
        Message: <textarea name="message" id="" cols="30" rows="5"></textarea><br><br>
        Formation: <select name="formations" id ="">
        <option value="">Choisir</option>
         <option value="dam">Dam</option>
         <option value="php">Php</option>
         <option value="reseaux">Réseaux</option>
        </select><br><br>
        <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>-->

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>La méthode POST pour envoie les paramètres par l'URL</p>
    <form action ="traitement2.php" method="POST"> 
        Nom: <input type="text" name="pseudo"><br><br>
        Age: <input type="text" name="age"><br><br>
        Pays: <input type="text" name="pays"><br><br>
        Mot de passe: <input type="password" name="pwd"><br><br>
        Message: <textarea name="message" id="" cols="30" rows="5"></textarea><br><br>
        Formation: <select name="formations" id ="">
        <option value="">Choisir</option>
         <option value="dam">Dam</option>
         <option value="php">Php</option>
         <option value="reseaux">Réseaux</option>
        </select><br><br>

        Modules: <select name="modules[]" multiple id ="">
        <option value="">Choisir</option>
         <option value="html">HTML</option>
         <option value="php">PHP</option>
         <option value="angular">ANGULAR</option>
         <option value="sql">SQL</option>
        </select><br><br>
        <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>-->


<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>La méthode POST pour envoie les paramètres par l'URL</p>
    <form action ="traitement2.php" method="POST"> 
        Nom: <input type="text" name="pseudo"><br><br>
        Age: <input type="text" name="age"><br><br>
        Pays: <input type="text" name="pays"><br><br>
        Mot de passe: <input type="password" name="pwd"><br><br>
        Message: <textarea name="message" id="" cols="30" rows="5"></textarea><br><br>
        Formation: <select name="formations" id ="">
        <option value="">Choisir</option>
         <option value="dam">Dam</option>
         <option value="php">Php</option>
         <option value="reseaux">Réseaux</option>
        </select><br><br>

        Modules: <select name="modules[]" multiple id ="">
        <option value="">Choisir</option>
         <option value="html">HTML</option>
         <option value="php">PHP</option>
         <option value="angular">ANGULAR</option>
         <option value="sql">SQL</option>
        </select><br><br>

        //Ajouter les jours
        <input type="checkbox" name="jours['lundi']">:lundi
        <input type="checkbox" name="jours['mardi']">:mardi
        <input type="checkbox" name="jours['mercredi']">:mercredi
        <input type="checkbox" name="jours['jeudi']">:jeudi
        <input type="checkbox" name="jours['vendredi']">:vendredi
        <input type="checkbox" name="jours['samedi']">:samedi
        <br>
        <br>

        <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="traitement2.php" method="POST">
    Pseudo: <input type="text" name="pseudo"><br>
         Age: <input type="text" name="age"><br>
         Mot de passe: <input type="password" name="pwd"><br>
         Message:<textarea name="message"></textarea><br>
         Formation:<select name="formations" id="">
         <option value="">Choisir</option>
         <option value="dam">Dam</option>
         <option value="php">Php</option>
         <option value="reseaux">Réseaux</option>
         </select><br>

         Modules:<select name="modules[]" multiple id="">
         <option value="">Choisir</option>
         <option value="html">Html</option>
         <option value="php">Php</option>
         <option value="angular">Angular</option>
         <option value="sql">Sql</option>
         </select><br>

        <input type="checkbox" name="jours['lundi']">:Lundi
        <input type="checkbox" name="jours['mardi]">:Mardi

        <input type="checkbox" name="jours['mercredi']">:Mercredi

        <input type="checkbox" name="jours['jeudi]">:Jeudi
<br>
        <input type="radio" name="sexe" value="masculin">:M <br>
        <input type="radio" name="sexe" value="feminin">:F <br>
         <button type="submit" name="envoi">Soumettre</button>
    </form>
</body>
</html>