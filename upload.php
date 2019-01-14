<?php
session_start();
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