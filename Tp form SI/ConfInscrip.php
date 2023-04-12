<?php session_start(); 

if (!isset($_SESSION['connecte'])){
  $_SESSION['connecte'] = 0;}


?>

<html>

<head>
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
    <link rel="stylesheet" media="all" type="text/css" href="css/ConfInscrip.css">
</head>

<body>
    <?php include("header.php") ?>
    <h1>Vous êtes inscrit</h1>
    <?php
    include("bdd.php");
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $mail = $_REQUEST['mail'];
    $mdp = $_REQUEST['mdp'];
    $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
    $bdd->query("INSERT INTO profil VALUES ( null ,'$nom', '$prenom', '$mail' , '$mdphash');"); 
    ?>


</body>

</html>