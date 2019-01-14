<?php

session_start();




// Fin controle formulaire
// if (isset($cheminetnomTemporaire) && isset($_fichier) && isset($_FILES)){
//     $cheminetnomTemporaire = $_FILES['fichier']['tmp_name'];
//     $_fichier = basename ($_FILES['fichier']['name']);
//     $_fichier = 'fichier_upload/'.$_FILES['fichier']['name'];
//     $moveIsOk = move_uploaded_file($cheminetnomTemporaire, $_fichier);
//   }


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
$lien = $filename;

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("Impossible d'ouvrir le fichier <$filename>\n");
}
foreach ($_SESSION["fichiers"] as $key => $_fichier) {
    $zip->addFile($_fichier);
}

// echo "Nombre de fichiers : " . $zip->numFiles . "\n";
// echo "Statut :" . $zip->status . "\n";
$zip->close();

// FIN FICHIER ZIP
function sanityze_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

// Controle du formulaire
$destinataire = $_POST['destinataire'];
$expediteur = $_POST['expediteur'];
$mess = $_POST['message'];

$email = "test@test.com";

$header="MIME-Version: 1.0\r\n";
    $header.='From: UploadIt <'.$expediteur.'>'."\r\n";
    $header.='Content-Type:text/html; charset="utf-8"'."\r\n";
    $header.='Content-Transfer-Encoding: 8bit\r\n';
    ob_start();
    include "email.php";
    $template = ob_get_clean();

    //check if the email address is invalid $secure_check
    $secure_check = sanityze_my_email($destinataire);
    if ($secure_check == false) {
        echo "Formulaire non valide";
    } else { //envoi du mail
        mail($destinataire,$mess,$template,$header);
        echo " Votre message à bien été envoyer";
        // echo $noel;
    }  

if ($destinataire != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) && $expediteur != "" &&  preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email))
{
$message = "L'adresse eMail est valide <br>";
}else {
$message = "L'adresse n'est pas valide <br>";
}

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
         <a href="<?=$lien?>">Voici le lien de téléchargement</a>
    </body>
</html>