<header>
    <div id="head">
        <div id="link">
            <?php
            if ($_SESSION['connecte'] == '0') {
             
            echo "<a href='Connexion.php'>Connexion</a>
            <a href='Inscrip.php'>Inscription</a>";
            } else if ($_SESSION['connecte'] == '1') {
                echo "<a href='Connexion.php'>Déconnexion</a>";
            }
            ?>
        </div>

        <div id="menu"><a href="index.php"><img src="img/logo.png" id="flecheMenu" alt="logo menu"></a></div>


    </div>
</header>