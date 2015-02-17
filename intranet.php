<?php /**
 * Created by PhpStorm.
 * Owner: Benoit
 * Date: 13/02/2015
 * Time: 08:44
 */ ?>

<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>M2l - Intranet</title>
</head>
<body>
        <?php include("menu.php") ?>
        <br /><br />
        <h2>Private sector</h2>
        <p>Connexion réussie !!</p>

        <?php
        $nom = $_POST["log"];
        echo "Bonjour, ".$nom;
        ?>
</body>
</html>