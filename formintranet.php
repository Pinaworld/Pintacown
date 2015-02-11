<!DOCTYPE html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>M2l - Connexion</title>
</head>
<body>

        <?php include("menu.php") ?>
        <br /><br />
        <h2>Serveur privée à connexion securisée</h2>

        <form method="post" action="intranet.php" name="leNom">
            <br /><br />
            <label for="inputPassword"></label>
            Identifiant de connexion : <input type="text" name="log" size="20" maxlength="50" placeholder="Nom de connexion"/><br /><br />
            Mot de passe : <input id="inputPassword" type="password" name="mdp" /><br /><br />

<!--Ceci est un test--><p>test</p>

            <input type="submit" value="Envoyer">
            <input type="reset" value="Annuler">

            <br />
            <br />
        </form>
</body>