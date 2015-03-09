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
<img src="pict/bannerm2l.png" /><br />


<script src="bootstrap/bootstrap.min.js"></script>

<!--
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"><span
                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                class="icon-bar"></span> <span class="icon-bar"></span></button>
        <a class="navbar-brand">Project Name</a></div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown"><a tabindex="0" data-toggle="dropdown">Dropdown<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Action</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="0">Sub action</a></li>
                            <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Another sub
                                    action</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0">Sub action</a></li>
                                    <li><a tabindex="0">Another sub action</a></li>
                                    <li><a tabindex="0">Something else here</a></li>
                                </ul>
                            </li>
                            <li><a tabindex="0">Something else here</a></li>
                            <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Another action</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0">Sub action</a></li>
                                    <li><a tabindex="0">Another sub action</a></li>
                                    <li><a tabindex="0">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Another action</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="0">Sub action</a></li>
                            <li><a tabindex="0">Another sub action</a></li>
                            <li><a tabindex="0">Something else here</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="0">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="0">Separated link</a></li>
                </ul>
            </li>
            <li class="dropdown"><a tabindex="0" data-toggle="dropdown">Dropdown 2<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Action</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="0">Sub action</a></li>
                            <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Another sub
                                    action</a>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="0">Sub action</a></li>
                                    <li><a tabindex="0">Another sub action</a></li>
                                    <li><a tabindex="0">Something else here</a></li>
                                </ul>
                            </li>
                            <li><a tabindex="0">Something else here</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="0">Another action</a></li>
                    <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Something else here</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="0">Sub action</a></li>
                            <li><a tabindex="0">Another sub action</a></li>
                            <li><a tabindex="0">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a tabindex="0">Separated link</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a tabindex="0" data-toggle="dropdown">Dropdown 3<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a tabindex="0">Action</a></li>
                    <li><a tabindex="0">Another action</a></li>
                    <li><a tabindex="0">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a tabindex="0">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
-->

<ul class="nav nav-pills">

    <li role="presentation" class="active"><a href="index.php">Accueil</a></li>
    <li role="presentation"><a href="staff.php">Qui sommes nous ?</a></li>
    <li role="presentation"><a href="blog.php">Le blog</a></li>


    <li class="dropdown"><a tabindex="0" data-toggle="dropdown">M2l<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Qui sommes nous ?</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="0">#</a></li>
                    <li class="dropdown-submenu"><a tabindex="0" data-toggle="dropdown">Another sub
                            action</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="0">qui sommes nous ?</a></li>
                            <li><a tabindex="0">Personnel</a></li>
                            <li><a tabindex="0">Locaux</a></li>
                        </ul>
                    </li>
                    <li><a tabindex="0">Somethin00ere</a></li>
                </ul>
            </li>
            <li><a tabindex="0">Personnel</a></li>

            <li class="divider"></li>
            <li><a tabindex="0">Juridiction</a></li>
        </ul>
    </li>
    <li role="presentation"><a href="emploi.php">Offre d'emploi</a></li>
    <li role="presentation"><a href="juridiction.php">Juridiction</a></li>
    <li role="presentation"><a href="locaux.php">Locaux</a></li>
    <li role="presentation"><a href="stuffinfo.php">Matériel deployé</a></li>
    <li role="presentation"><a href="services.php">Services</a></li>
    <li role="presentation"><a href="reservationinfo.php">Reservations</a></li>
    <li role="presentation"><a href="formintranet.php">Intranet</a></li>
</ul>

</body>
</html>
