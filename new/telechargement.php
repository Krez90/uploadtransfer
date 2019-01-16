<?php

include('infosql.php');
$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

function getOneUrl($id) {
    global $dbh;

    $urls = $dbh->query('SELECT Url FROM upload WHERE id_fichier='.$id.';');

    return $urls->fetch();
}

// $id = 184; //Je prends un id arbitrairement, il devra provenir de l'URL en réalité (par ex localhost/MVC2/film/2 pour l'id 2)
$id = $_GET['id_fichier'];
$url = getOneUrl($id);

//traiter les données
// $url['Url'] = ucfirst($url['Url']);
$url['Url'];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Téléchargement</title>
    <link rel="stylesheet" href="public/css/telechargement.css">
</head>

<body>

    <header>
        <div class="padding">
            <a id="center" href="https://thecleaureliea.promo-24.codeur.online/UploadIt/"> <img class="left" src="public/images/logo2.png" style="max-width: 400px"></a>

        </div>
    </header>

    <p>Téléchargement</p>


    <a href="https://thecleaureliea.promo-24.codeur.online/UploadIt/<?=$url['Url']?>"><button type="button">Télécharge le fichier</button></a>
        <br>
        <br>
        <form action="https://thecleaureliea.promo-24.codeur.online/UploadIt/">
            <input type="submit" value="Retour à l'accueil">
        </form> 

<p>Merci d'avoir utilisé nos services !</p>
<div id="nuage"> <img url="public/images/nunu.png"></div>
</body>

</html>