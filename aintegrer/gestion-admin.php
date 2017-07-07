<!DOCTYPE html>
<html lang="en">
<head>
    <html lang="en">
<head>
    <title>Ingames-ADMIN(gestion)</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-admin.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<header>
    <div id="return" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <a href="index.php"><<-retour vers le site</a>
        <h1>Bienvenue Admin</h1>
    </div>
    <div id="gestion" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <a href="ajout-article.php">Creation de contenu</a>
        <a style="text-decoration: underline;">Gestion admin</a>
        <a href="#">déconnexion</a>
    </div>
</header>
<body>
    <div id="adming" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <h2>Gestion des administrateurs</h2>
        <p>vous pouvez ici donner les droits d'administrateur à d'éventuels membres de l'équipe d'administration,<br> saisissez le nom de l'utilisateur à promouvoir et cocher la case administrateur</p>
        <form action="#" method="get">
            <input type="radio" class="a">Utilisateur simple
            <input type="radio" class="a">Modérateur
            <button type="submit">Valider
        </form>
</body>