<?php session_start(); 

if (!isset($_SESSION['connecte'])){
  $_SESSION['connecte'] = '0';}


?>

<html>

<head>
  <title>Formulaire</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
  <link rel="stylesheet" media="all" type="text/css" href="css/Inscrip.css">
</head>

<body>
  <?php include("header.php") ?>
  <h1>Bienvenue sur notre site!</h1>
  <div id="Index">
    <h2>Vous souhaitez vous connecter?</h2>
    <a href="Connexion.php">Cliquez juste ici</a>
    <h2>Pas encore de compte?</h2>
    <a href="Inscrip.php">Alors n'hésitez pas!</a>
    <h2>Et si c'est simplement pour voir les blogs</h2>
    <a href="blog.php">C'est là</a>
  </div>
</body>

</html>