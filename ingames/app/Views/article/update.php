<?php $this->layout('layout_admin', ['title' => 'Outil modification d\'articles']) ?>

<?php $this->start('main_content') ?>
		<h2>Modification d'articles.</h2>
		<form method="POST" action="<?= $this->url('article_update', ['id'=>$article['id']]); ?>" enctype="multipart/form-data">
			
			<label for="title">Titre</label>
			<input type="text" name="title" placeholder="titre du contenu" id="title">
			<br>

			<label for="article_type">Type de contenu</label>
			<select name="article_type" id="article_type">
				<?php foreach ($types as $key => $type) { ?>
				<option value="<?= $type['id'] ?>"><?= $type['article_type'] ?></option> <?php
				} ?>
			</select>
			<br>

			<label for="system">Console</label>
			<select name="system" id="system">
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