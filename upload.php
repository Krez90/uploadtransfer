<?php

session_start();
var_dump($_SESSION).
// Fichier upload

    $cheminetnomTemporaire = $_FILES['fichier']['tmp_name'];
    $_fichier = basename ($_FILES['fichier']['name']);
    $_FILES['fichier']['name'] = time().$_FILES['fichier']['name'];
    $_fichier = 'fichier_upload/'.$_FILES['fichier']['name'];
    $moveIsOk = move_uploaded_file($cheminetnomTemporaire, $_fichier);

if($moveIsOk){
$message = "Le fichier à été uploadé avec succès";
$_SESSION['fichiers'][] = $_fichier;
}
else{
  $message = "Suite à une erreur, le fichier n'a pas été uploadé !!";
}

echo $message;
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

// FICHIER ZIP
$zip = new ZipArchive();
$filename = "fichier_upload/UploadIt".$code_aleatoire.".zip";
if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("Impossible d'ouvrir le fichier <$filename>\n");
}

$zip->addFile($_fichier);

// echo "Nombre de fichiers : " . $zip->numFiles . "\n";
// echo "Statut :" . $zip->status . "\n";
$zip->close();

// FIN FICHIER ZIP
