<?php session_start(); 

if (!isset($_SESSION['connecte'])){
  $_SESSION['connecte'] = 0;}

 
  $_SESSION['connecte'] = 0;
?>

<html>

<head>
  <title>Formulaire</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
  <link rel="stylesheet" media="all" type="text/css" href="css/Connexion.css">
</head>

<body>
  <?php include("header.php") ?>
  <form action="ConfConnexion.php" method="post" onsubmit="return validation()">
    <div id="formulaire">
      <h1>Connexion</h1>
      <br>
      <label for="mail" id="labelMail">Adresse Mail</label>
      <br>
      <input type="text" id="mail" name="mail" autocomplete="off">
      <br>
      <label for="mdp" id="labelMdp">Mot de passe</label>
      <br>
      <input type="password" id="mdp" name="mdp" autocomplete="off">
      <br>
      <br>
      <input type="submit" id="submit" name="submit">
    </div>

  </form>

  <script src="javascript/Connexion.js"></script>
</body>

</html>