<?php require_once('header.php'); ?>
<div class="container">
   <div class="row">
    <div id="lifeline">
        <a href="index.php">Accueil</a>
        <a style="text-decoration:none">>>></a>
        <a style="text-decoration:underline">nous contacter</a>
    </div>
    <form role="form" id="contact-form" class="contact-form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="Votre e-mail ici">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Votre message ici"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="pull-center">Envoyez</button>
            </div>
        </div>
    </form>
    </div>
<!--
    <div id="contact" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <h1>Nous contacter</h1>
        <form action="#" method="post">
        Adresse mail:<input type="text" placeholder="votre mail ici">
        <br>
        <br> 
        votre message:<input type="text" placeholder="votre message ici">
    </div>
-->
</div>
<?php require_once('footer.php');?>