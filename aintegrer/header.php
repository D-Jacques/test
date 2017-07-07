<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ingames</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
    <body>
        <div>
            <header class="container-fluid">
                <div class="row">
                    <div id="logo" class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
                        <a href="index.php"><img src="img/logoingames.png" id="imglogo"></a>
                    </div>
                    <div id="login" class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                        <form action="login.php" method="post">
                            <input type="text" name="username" id="username" placeholder="nom d'utilisateur">
                            <input type="text" name="password" id="password" placeholder="mot de passe">
                            <button type="submit">
                                <strong>Login</strong>
                            </button>
                        </form>
                        <p>Pas encore inscrit:</p>
                        <a href="#">S'inscrire</a>
                    </div>
                </div>
            </header>
            <div id="navbar" class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="news.php">News</a></li>
                        <li><a href="sorties.php">Sorties</a></li>
                        <li><a href="event.php">Event</a></li>
                        <li><a href="mise-à-jour.php">Mise à jour</a></li>
                        <li><a href="dossier.php">Dossier</a></li>
                       <li>
                            <form action="recherche.php" method="post">
                                <input type="text" name="champsrecherche" id="champsrecherche" placeholder="recherche">
                                <button type="submit">
                                    <span class="fa fa-search"></span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </div>
        </div>