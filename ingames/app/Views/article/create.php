<?php $this->layout('layout', ['title' => 'Outil création d\'articles']) ?>

<?php $this->start('main_content') ?>
	<h2>Création d'articles.</h2>
	<form method="POST" action="<?= $this->url('article_create') ?>" enctype="multipart/form-data">
		
		<label for="title">Titre</label>
		<input type="text" name="title" placeholder="titre du contenu" id="title">
		<br>

		<label for="article_type">Type de contenu</label>
		<select name="article_type" id="article_type">
			<option value="null" disabled selected>Selectionner un type</option>
			<?php foreach ($types as $key => $type) { ?>
			<option value="<?= $type['id'] ?>"><?= $type['article_type'] ?></option> <?php
			} ?>
		</select>
		<br>

		<label for="system">Console</label>
		<select name="system" id="system">
			<option value="null" disabled selected>Selectionner une console</option>
			<?php foreach ($systems as $key => $system) { ?>
			<option value="<?= $system['id'] ?>"><?= $system['system_name'] ?></option> <?php
			} ?>
		</select>
		<br>

		<label for="article_content">Zone de contenu</label>
		<textarea name="article_content" rows="25" cols="150"></textarea>
		<br>

		<label for="article_picture">Illustration de contenu</label>
		<input type="file" name="article_picture" id="article_picture">
		<br>

		<button type="submit"> Valider </button>
	</form>

<?php $this->stop('main_content') ?>