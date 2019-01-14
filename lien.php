<?php
include('formulaire.php');

 function getOneFichier($id) {
    global $bdh;
    $fichier = $bdh->query('SELECT code 
                         FROM ulpoad
                         WHERE id_fichier='.$id.';');
    return $fichier->fetch();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>traitement upload</title>
</head>
    <body>
         <p>Le lien de téléchargement<?$fichier?></p>
    </body>
</html>