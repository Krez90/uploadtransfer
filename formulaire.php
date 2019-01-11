<?php

session_start();

// Controle du formulaire
$destinataire = $_POST['destinataire'];
$expediteur = $_POST['expediteur'];
$email = "test@test.com";
if ($destinataire != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) && $expediteur != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email))
{
$message = "L'adresse eMail est valide <br>";
}else {
$message = "L'adresse n'est pas valide <br>";
}

// Fin controle formulaire
if (isset($cheminetnomTemporaire) && isset($_fichier) && isset($_FILES)){
    $cheminetnomTemporaire = $_FILES['fichier']['tmp_name'];
    $_fichier = basename ($_FILES['fichier']['name']);
    $_FILES['fichier']['name'] = time().$_FILES['fichier']['name'];
    $_fichier = 'fichier_upload/'.$_FILES['fichier']['name'];
  }

// Générer le code aléatoire
$characts = 'abcdefghijklmnopqrstuvwxyz'; 
$characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
$characts .= '1234567890'; 
$code_aleatoire = '';

for($i=0;$i < 10;$i++) 
{ 
$code_aleatoire .= $characts[ rand() % strlen($characts) ]; 
}
// Fin code aléatoire


include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function addFichier($_fichier,$code_aleatoire){
    global $dbh;

$add_fichier = $dbh->prepare('INSERT INTO upload (Url, code, date) VALUES (?,?, NOW());');
$add_fichier->execute([$_fichier,$code_aleatoire]);

}
if (isset($_fichier)){
addFichier($_fichier, $code_aleatoire);
}

// Fin d'enregistrement base de donnée
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>traitement upload</title>
</head>
    <body>
         <p><?= $message?></p>
    </body>
</html>