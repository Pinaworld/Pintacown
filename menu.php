<?php /**
* Created by PhpStorm.
* Owner: Benoit
* Date: 13/02/2015
* Time: 08:44
*/ ?>

<html><head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <meta name="viewport" content="width=device-width" />
    <LINK href="style/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Hello - Bootstrap-submenu</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <script src="bootstrap/bower_components/jquery/dist/jquery.js" defer="defer"></script>
    <script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.js" defer="defer"></script>
    <script src="bootstrap/bootstrap-submenu.min.js" defer="defer"></script>
    <script src="bootstrap/docs.min.js" defer="defer"></script>

</head>

<body class="page-header">

<div class="container">
    <div class="col-lg-offset-1">
        <img src="pict/bannerm2l.png" /><br />


        <script src="bootstrap/bootstrap.min.js"></script>

        <ul class="nav nav-pills">

            <li role="presentation" class="active"><a href="index.php">Accueil</a></li>


            <li class="dropdown"><a tabindex="0" data-toggle="dropdown">M2l<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu">
                        <a tabindex="0" data-toggle="dropdown"><a href="staff.php">Qui sommes nous ?</a>

                    </li>
                    <li><a tabindex="0"><a href="stuffinfo.php">Matériel deployé</a></a></li>

                    </li>
                    <li><a tabindex="0"><a href="services.php">Services</a></a></li>

                    </li>
                    <li><a tabindex="0"><a href="locaux.php">Locaux</a></a></li>


            <li class="divider"></li>
                    <li><a tabindex="0"><a href="juridiction.php">Juridiction</a></a></li>
                </ul>
            </li>
            <li role="presentation"><a href="emploi.php">Offre d'emploi</a></li>
            <li role="presentation"><a href="blog.php">Le blog</a></li>
            <li role="presentation"><a href="reservationinfo.php">Reservations</a></li>
            <li role="presentation"><a href="formintranet.php">Intranet</a></li>
        </ul>
    </div>
</div>
</body>
</html>
