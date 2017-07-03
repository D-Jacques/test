<?php $this->layout('layout', ['title' => 'Outil création d\'articles']) ?>

<?php $this->start('main_content') ?>
	<h2>Inscripion.</h2>
	<form method="POST" action="<?= $this->url('article_create') ?>" enctype="multipart/form-data">
		
		<label for="title">Titre</label>
		<input type="text" name="title" placeholder="Nom d'utilisateur" id="title">
		<br>

		<label for="article_type">Type de contenu</label>
		<select name="article_type" id="article_type">
			<option value="News">News</option>
		</select>
		<br>

		<label for="system">Console</label>
		<select name="system" id="system">
			<option value="PS4">PS4</option>
		</select>
		<br>

		<label for="article_content">Zone de contenu</label>
		<textarea name="article_content"></textarea>
		<br>

		<label for="article_picture">Illustration de contenu</label>
		<input type="file" name="article_picture" id="article_picture">
		<br>

		<button type="submit"> Valider </button>
	</form>

<?php $this->stop('main_content') ?>