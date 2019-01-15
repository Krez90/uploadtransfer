<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UploadIt</title>
  <link rel="stylesheet" type="text/css" href="public/css/nunu.css">
  <!-- Lien GOOGLE FONT typo Raleway. -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Lien CSS FILEPOND !!IMPORTANT!!. -->
  <link href="public/filepond-master/dist/filepond.css" rel="stylesheet">
</head>
<body>

  <header>
    <div id="logo" class="padding">
    <a id="center" href="https://thecleaureliea.promo-24.codeur.online/UploadIt/" >
    <img class="left" src="public/images/logo2.png">
    <!--  <span>UploadIt</span> -->
    </a>
  </div>
  </header>

  <section class="padding">
  <div id="box" class="taille">
      <div id="center">
    <form  id = "contact" method="post" action="formulaire.php" enctype="multipart/form-data">
      
      <label></label><input name="destinataire" id="destinataire" placeholder="Email du destinataire" required><span id="missDest"></span>
      <p class="errorMessage"></p>
      <br/>
      <br/>
      <label></label><input name="expediteur" id="expediteur" placeholder="Email de l'expéditeur" required><span id="missExp"></span>
      <p class="errorMessage"></p>
      <br/>
      <br/>
      <label></label><textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
      <p class="errorMessage"></p>
      <br/>
      <br/>
      <!-- Input FILEPOND. -->
      <input type="file"
    class="filepond"
    name="fichier"
    multiple 
    data-max-file-size="3MB"
    data-max-files="3">
      <button type="submit" name="envoyer" id="envoyer" value="enregister">Envoyer</button>
    </form>
    
  </div>

  <div class="nuage">
  <img id="taille_nunu" src="public/images/nunu.png">
  </div>
  
  </div>
  </section>


  <!-- Chemin vers les fichier de références FILEPOND !!IMPORTANT!!. -->
  <script src="public/filepond-master/dist/filepond.js"></script>
  <!-- Script js FILEPOND. -->
  <script src="public/js/fichier.js"></script>
  <script src="public/js/securite.js"></script>
</body>
</html>