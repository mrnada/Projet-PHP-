<?php 
/*Création de REGEX pour tester la validité de mail
Le mot de passe doit - Avoir  8 caractères -[Le premier mot doit être en majuscule et le dernier caractère doit être un symbole] - 
Contient des caractères d'au moins 3 des catégories suivantes : - lettres majuscules a (A-Z) - lettres minuscules anglaises (a-z) - 
chiffres (0-9) - symboles non alphanumériques (ex : !, #, $, %, Espace) - caractères Unicode
Cette expression rationnelle appliquera ces règles:
•	Au moins une lettre majuscule (?=[A-Z])
•	Au moins une lettre  minuscule, ([a-z])
•	Au moins un chiffre, ([0-9]) ou (?=.*\d)
•	Au moins un caractère spécial, ([#?!@$%^&*-])
•	huit caractères .{8}*/

$search ="/^(?=.*\d)(?=[A-Z].*)(?=.*[`~!@#$%^&*()_\-+={}[\]\\|:;\"\'<>,\.\?\/]$).{8}$/";
$mot = "Simon77#";

if(preg_match($search,$mot)){
    echo "ok";
}else{
    echo "ko";
}

/*
$email = "Abfg3!@gmail.com"; 
//http://www.php.net/function.preg-match
if(preg_match("/^(?=[a-zA-Z0-9])(?=.*[`~!@#$%^&*()_\-+={}[\]\\|:;\"\'<>,\.\?\/].{8,}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/",$email))

{ 
    echo "L’adresse e-mail est valide."; 
} else { echo "L’adresse e-mail n’est pas valide.";
}

var_dump($email);
*/

/*  /^([A-Z])([a-z])([0-9])(?=.*?[#?!@$%^&*-]).{8}$


*/



/*$re_password = '/
    # Match password having multiple, specific requirements.
    ^                       # Anchor to start of string.
    (?=.{12})               # Password must be at least 12 characters long.
    (?![0-9])               # Password must not begin with a number.
    (?:                     # Password must have 3 out of 4 characteristics:
       # Either... Case 1: (All but R1).
      (?=[^a-z]*[a-z])      # R2: At least one lower case letter (a-z).
      (?=[^0-9]*[0-9])      # R3: At least one number (0-9).
      (?=[^-_$\#]*[-_$\#])  # R4: At least one of: [-_$#].
    |  # Or... Case 2: (All but R2).
      (?=[^A-Z]*[A-Z])      # R1: At least one upper case letter (A-Z).
      (?=[^0-9]*[0-9])      # R3: At least one number (0-9).
      (?=[^-_$\#]*[-_$\#])  # R4: At least one of: [-_$#].
    |  # Or... Case 3: (All but R3).
      (?=[^A-Z]*[A-Z])      # R1: At least one upper case letter (A-Z).
      (?=[^a-z]*[a-z])      # R2: At least one lower case letter (a-z).
      (?=[^-_$\#]*[-_$\#])  # R4: At least one of: [-_$#].
    |  # Or... Case 4: (All but R4).
      (?=[^A-Z]*[A-Z])      # R1: At least one upper case letter (A-Z).
      (?=[^a-z]*[a-z])      # R2: At least one lower case letter (a-z).
      (?=[^0-9]*[0-9])      # R3: At least one number (0-9).
    )                       # End group of 3-out-of-4 alternatives.
    [A-Za-z0-9-_$\#]+       # Match the password string.
    $                       # Anchor to end of string.
    .{12,}            # Password must be at least 12 characters long
^(?!\d)           # Password must not begin with a number
(.*[A-Z].*)+      # At least one upper case letter (A-Z)
(.*[a-z].*)+      # At least one lower case letter (a-z)
(.*[0-9].*)+      # At least one number (0-9)
(.*[-_$#].*)+     # At least one of the following symbols: hyphen ( - ), underscore ( _ ), dollar ( $ ), pound/hash ( # )
    /x';


https://www.regular-expressions.info/
*/

?>

