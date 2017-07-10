<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- head intégré ! -->

    <title>Ingames</title>
    <meta charset="UTF-8">
    <!-- CDN de fontAwesome -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Feuilles de styles -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/styles-admin.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/toastr.css') ?>">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- ////////////////////////////// -->

    <!-- Haut de page intégré -->

    <header>
        <div id="return" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <a href="<?= $this->url('default_home'); ?>"><-retour vers le site</a>
            <h1>Bienvenue <?= $_SESSION['user']['user_name']; ?></h1>
        </div>
        <div id="gestion" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <a href="<?= $this->url('article_list');?>">Gestion de contenu</a>
            <a href="#">Gestion admin</a>
            <a href="<?= $this->url('admin_deconnection');?>">déconnexion</a>
        </div>
    </header>
    <!-- ////////////////////////////// -->

    <!-- Corps de la page -->
    <div class="container">
        <section>
            <?= $this->section('main_content') ?>
        </section>
    </div>
    <!-- ////////////////////////////// -->

    <!-- Scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.min.js')?>"></script>
    <script src="<?= $this->assetUrl('js/toastr.js') ?>"></script>
    <script type="text/javascript">
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "newestOnTop": true,
              "progressBar": true,
              "positionClass": "toast-top-center",
              "preventDuplicates": true,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
        <?php if(isset($_SESSION['success'])){
        ?>
            toastr.success('<?php echo $_SESSION['success']?>', 'Voilà');
        <?php
        } elseif(isset($_SESSION['error'])){
        ?>
            toastr.error("<?php echo $_SESSION['error']?>", ' Oups !');
        <?php
        }
        unset($_SESSION['error']);
        unset($_SESSION['success']);
        ?>
    </script>
    
    <?= $this->section('script') ?>

    <!-- ////////////////////////////// -->

</body>
</html>