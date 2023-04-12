<?php session_start(); 

if (!isset($_SESSION['connecte'])){
  $_SESSION['connecte'] = 0;}
  
?>



<html>

<head>
  <title>Formulaire</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
  <link rel="stylesheet" media="all" type="text/css" href="css/Inscrip.css">
</head>

<body>
  <?php include("header.php"); ?>
  <form action="ConfInscrip.php" method="post" onsubmit="return validation()">
    <div id="formulaire">
      <h1>Bienvenue dans l'inscription!</h1>
      <label for="nom" id="labelNom">Nom</label>
      <br>
      <input type="text" id="nom" name="nom" autocomplete="off">
      <p id="errornom">Le nom doit faire entre 3 et 100 caractère</p>
      <br>
      <label for="prenom" id="labelPrenom">Prenom</label>
      <br>
      <input type="text" id="prenom" name="prenom" autocomplete="off">
      <p id="errorprenom">Le prénom doit faire entre 3 et 100 caractère</p>
      <br>
      <label for="mail" id="labelMail">Adresse Mail</label>
      <br>
      <input type="text" id="mail" name="mail" autocomplete="off">
      <p id="errormail">Le mail fournie n'est pas au bon format(exemple: siteofmine@myuniverse.com)</p>
      <br>
      <label for="mdp" id="labelMdp">Mot de passe</label>
      <br>
      <input type="password" id="mdp" name="mdp" autocomplete="off">
      <p id="errormdp">Le mot de passe doit contenir une majuscule, une minuscule et un chiffre, et faire plus de 6 caractères</p>
      <br>
      <label for="confmdp" id="labelConfMdp">Confirmation du mot de passe</label>
      <br>
      <input type="password" id="confmdp" name="confmdp" autocomplete="off">
      <p id="errorconf">Le mot de passe est différent</p>
      <br>
      <br>
      <input type="submit" id="submit" name="submit">
    </div>

  </form>

  <script src="javascript/Inscrip.js"></script>
</body>

</html>