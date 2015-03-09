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
    <LINK href="style/bootstrap.css" rel="stylesheet" type="text/css">
    <title>M2l - Connexion</title>
</head>
<body>

        <?php include("menu.php") ?>
        <br /><br />
        <h2>Bienvenu Ligue <?php echo 'bonjour'?></h2>

        <form class="form-horizontal" method="post" action="intranet.php" name="leNom">
            <div class="form-group">
                <label for="inputName1" class="col-sm-2 control-label">Identifiant de connexion :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName1" placeholder="Identifiant">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Se souvenir de moi.
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Connexion</button>
                </div>
            </div>
        </form>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php include("footer.php") ?>
</body>



</html>