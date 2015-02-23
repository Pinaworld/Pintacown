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
    <title>M2l - Locaux</title>
</head>
<body>
        <?php include("menu.php") ?>

        <h2>Locaux disponibles</h2>

<p>Une page de description des locaux</p>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Locale reservé aux sport en salle: <span class="label label-default">Nouveau !</span></h3>
                        <p>Situé à Paris 17eme</p>
                        <p><a href="#" class="btn btn-primary" role="button">Reserver</a> <a href="#" class="btn btn-default" role="button">Plus d'info</a></p>
                    </div>
                </div>
            </div>                                  <!--Demandez plus de détails-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Local pour waterpolo
                            <span class="label label-warning">Reservé !</span></h3>
                        <p></p>
                        <p><a href="#" class="btn btn-primary" role="button" >Allez voir</a> <a href="#" class="btn btn-default" role="button">Pas interessé</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Local 3</h3>
                        <p>Situé à...</p>
                        <p><a href="#" class="btn btn-primary" role="button">Interessé</a> <a href="#" class="btn btn-default" role="button">Pas interessé</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Local 4</h3>
                        <p>Situé à paris</p>
                        <p><a href="#" class="btn btn-primary" role="button">Interessé</a> <a href="#" class="btn btn-default" role="button">Non</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Local 5</h3>
                        <p>Situé à Versailles</p>
                        <p><a href="#" class="btn btn-primary" role="button">Allez voir</a> <a href="#" class="btn btn-default" role="button">Pas interessé</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                        <h3>Local 6</h3>
                        <p>Principe compris les gars ?</p>
                        <p><a href="#" class="btn btn-primary" role="button">Interessé</a> <a href="#" class="btn btn-default" role="button">Pas interessé</a></p>
                    </div>
                </div>
            </div>
        </div>
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