<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>traitement upload</title>
</head>
    <body>
        <h1>Uploadtransfer</h1>
         <p><?= $message?></p>

<?php

// Fichier upload 
    $cheminetnomTemporaire = $_FILES['fichier']['tmp_name'];
    $_fichier = basename ($_FILES['fichier']['name']);
    $_fichier = 'fichier_upload/'.$_FILES['fichier']['name'];
    $moveIsOk = move_uploaded_file($cheminetnomTemporaire, $_fichier);

if($moveIsOk){
$message = "Le fichier à été uploadé avec succès";
}
else{
  $message = "Suite à une erreur, le fichier n'a pas été uploadé !!";
}
// Fin fichier Upload

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

// Enregistrement dans base de donnée
include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function addFichier($url,$code_aleatoire){
    global $dbh;

$add_fichier = $dbh->prepare('INSERT INTO upload (Url, code) VALUES (?,?);');
$add_fichier->execute([$url,$code_aleatoire]);

}
addFichier($_fichier, $code_aleatoire);
// Fin d'enregistrement base de donnée
?>
    </body>
</html>