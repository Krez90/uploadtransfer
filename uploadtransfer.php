<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>  
<?php

include('infosql.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);
?>  
    <div class="Formulaire">
        <form method="POST" action="" enctype="multipart/form-data">

            <input class="boutonchoose" type="file" name="fichier">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        </form>
        <form method="post" action="formulaire.php" class="form">

            <label for='nom'>Envoyer à</label></br>
            <input type='text' name='nom' id='nom' required>
            <span id='missNom'></span><br>

            <label for='mail'>Votre adresse e-mail</label></br>
            <input type='text' name='mail' id='mail' required>
            <span id="missMail"></span><br>

            <label for='message'>Message</label></br>
            <textarea name='message' id='message' class="texte_carre"></textarea>
            <span id="missmess"></span><br>

            <input type='submit' value='Transférer' id='bouton_envoi'>
        </form>
    </div>

</body>

</html>