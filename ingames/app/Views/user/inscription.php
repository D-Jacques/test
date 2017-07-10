<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Inscripion.</h2>
	<form method="POST" action="<?= $this->url('admin_inscription') ?>">
		
		<label for="user_name">Nom d'utilisateur</label>
		<input type="text" name="user_name" placeholder="Nom d'utilisateur" id="user_name">
		<br>

		<label for="user_password">Mot de passe</label>
		<input type="password" name="user_password" id="user_password" placeholder="Mot de passe">
		<br>

		<label for="user_verification">Verifier le mot de passe</label>
		<input type="password" name="user_verification" id="user_verification" placeholder="Verifier le mot de pass">
		<br>

		<label for="user_mail">Nom d'utilisateur</label>
		<input type="text" name="user_mail" id="user_mail" placeholder="Adresse mail">
		<br>

		<div class="g-recaptcha" data-sitekey="6LfkRigUAAAAAJIBZD7Qx9GDhw7TKJxFiOTp9xKS"></div>
		
		<button type="submit"> Je m'inscrit</button>
	</form>

<?php $this->stop('main_content') ?>
