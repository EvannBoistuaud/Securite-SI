<?php session_start();

if (!isset($_SESSION['connecte'])) {
    $_SESSION['connecte'] = 0;
}


?>
<html>

<head>
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
    <link rel="stylesheet" media="all" type="text/css" href="css/Inscrip.css">
</head>

<body>
    <?php include("header.php");
    include("bdd.php");
    $Auteur = $bdd->query('SELECT profil.prenom, profil.nom FROM profil, blog WHERE profil.id = blog.idAuteur;');
    $blog = $bdd->query('SELECT titre FROM blog');

    if (!isset($_REQUEST['blog'])) {
        echo "<h1>Les blogs</h1>";
        while ($blogs = $blog->fetch()) {
            echo "<div class='blogs'>
            <div class='titaut'>" . $blog . "<br>" . $Auteur['prenom'] . " " . $Auteur['nom'] . "</div>
            <div class='choixblogs'><a href=''>Lire</a>";
            if ($_SESSION['connecte'] = 1) {
                echo "<br><a href=''>modifier</a><br><a href=''>Supprimer</a>";
            }
            echo "</div></div>";
        }
    }
    ?>
</body>

</html>