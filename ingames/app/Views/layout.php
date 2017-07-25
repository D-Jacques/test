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
    <link rel="stylesheet" href="<?= $this->assetUrl('css/styles.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/toastr.css') ?>">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- reCaptchat -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<!-- ////////////////////////////// -->

	<!-- Haut de page intégré -->

	<header class="container-fluid">
        <div class="row">
            <div id="logo" class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
                <a href="<?= $this->url('default_home'); ?>"><img src=" <?= $this->assetUrl('img/logoingames.png'); ?>" id="imglogo" alt="LogoIngames"></a>
            </div>
            <div id="login" class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
            <?php if(!isset($_SESSION['user'])){ ?>
                <form method="POST" action="<?= $this->url('admin_connection') ?>">
                    <input type="text" name="usernameOrEmail" id="username" placeholder="nom d'utilisateur">
                    <input type="password" name="userPassword" id="password" placeholder="mot de passe">
                    <button type="submit">
                        <strong>Login</strong>
                    </button>

                    <p>Pas encore inscrit:</p>
                	<a href="<?= $this->url('admin_inscription'); ?>">S'inscrire</a>
                </form>
            <?php
			} else {
			?>
				<h2>Bienvenue <?php echo $_SESSION['user']['user_name'] ;?></h2>
				<a href="<?php echo $this->url('admin_deconnection'); ?>">Deconnexion</a>
                <?php if($_SESSION['user']['user_type'] === 'admin'){?>
                <p>Accès a la <a href="<?= $this->url('admin_adminhome'); ?>">zone admin</a></p>

			<?php
                }
			}
			?>
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
                <li><a href="<?= $this->url('default_news', ['article_type' => 'News']) ?>">News</a></li>
                <li><a href="<?= $this->url('default_news', ['article_type' => 'Sortie']) ?>">Sorties</a></li>
                <li><a href="<?= $this->url('default_news', ['article_type' => 'Event']) ?>">Event</a></li>
                <li><a href="<?= $this->url('default_news', ['article_type' => 'Maj']) ?>">Mise à jour</a></li>
                <li><a href="<?= $this->url('default_news', ['article_type' => 'Dossier']) ?>">Dossier</a></li>
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

    <!-- ////////////////////////////// -->

    <!-- Corps de la page -->
    <div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>
	</div>
	<!-- ////////////////////////////// -->

	<!-- Pied de page -->

	<footer>
        <div id="lien" class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
            <ul class="col-md-4 col-md-offset-4">
               <li class="col-md-6">
                   <a href="<?= $this->url('default_quisommesnous')?>">- Qui sommes nous?</a>
               </li>
               <li class="col-md-6">
                   <a href="<?= $this->url('default_infolegales')?>">- Information légales</a>
               </li>
               <li class="col-md-6">
                   <a href="<?= $this->url('default_faq')?>">- Foire Aux Questions</a>
               </li>
               <li class="col-md-6">
                   <a href="<?= $this->url('default_contact')?>">- Nous contacter</a>
               </li>
            </ul>
        </div>
        <div id="social" class="col-lg-10 col-md-6 col-sm-12 col-xs-12">
            <ul>
                <li><a href="#"><span class="fa fa-facebook-official fa-3x"></span><p hidden>Facebook</p></a></li>
                <li><a href="#"><span class="fa fa-twitter-square fa-3x"></span><p hidden>Twitter</p></a></li>
                <li><a href="#"><span class="fa fa-instagram fa-3x"></span><p hidden>Instagram</p></a></li>
            </ul>
        </div>
        <div id="copyright" class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
            <a href="#"><span class="fa fa-copyright fa-3x"></span><p hidden>copyright</p></a>
    </footer>

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
	<script src="<?= $this->assetUrl('js/script.js')?>"></script>
	
	<?= $this->section('script') ?>

	<!-- ////////////////////////////// -->

</body>
</html>