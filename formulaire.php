<?php
session_start();

// Controle du formulaire
$destinataire = $_POST['destinataire'];
$expediteur = $_POST['expediteur'];
$email = "test@test.com";
if ($destinataire != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) && $expediteur != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email))
{
$message = "Votre fichier à bien été envoyé<br>";
}else {
$message = "L'adresse n'est pas valide ou le format des fichiers incorrect<br>";
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
// Fin code aléatoiree

// FICHIER ZIP
$zip = new ZipArchive();

$filename = "fichier_upload/UploadIt".$code_aleatoire.".zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("Impossible d'ouvrir le fichier <$filename>\n");
}
foreach ($_SESSION["fichiers"] as $key => $_fichier) {
    $zip->addFile($_fichier);
}

$zip->close();

// FIN FICHIER ZIP

include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function addFichier($filename, $code_aleatoire){
    global $dbh;

$add_fichier = $dbh->prepare('INSERT INTO upload (Url, code, date) VALUES (?,?, NOW());');
$add_fichier->execute([$filename, $code_aleatoire]);

}
if(isset($filename)){
addFichier($filename, $code_aleatoire);
}

// Fin d'enregistrement base de donnée
$_SESSION = [];
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