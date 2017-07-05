<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link href="<?= $this->assetUrl('css/toastr.css')?>" rel="stylesheet"/>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<?php if(!isset($_SESSION['user'])){ ?>
				<form method="POST" action="<?= $this->url('admin_connection') ?>">
					<input type="text" name="usernameOrEmail" placeholder="Nom d'utilisateur ou email"><br>
					<input type="password" name="userPassword" placeholder="mot de passe">

					<button type="submit">Login</button>
				</form>
			<?php
			} else {
				?>
				<h2>Bienvenue <?php echo $_SESSION['user']['user_name'] ;?></h2>
				<a href="<?php echo $this->url('admin_deconnection'); ?>">Deconnexion</a>
			<?php
			}
			?>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
</body>
</html>