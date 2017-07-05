<?php $this->layout('layout', ['title' => 'Liste des articles']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des articles.</h2>

	<?php
		foreach($articles as $article){
			?>
			<img src="<?= $this->assetUrl($article['article_picture'])?>"><br>
			<?php
			echo $article['title'].'<br>';
			echo $article['article_resume'].'<br>';
			?>
			<form method="POST" action="<?= $this->url('article_delete') ?>">
				<input type="hidden" name="id" value="<?= $article['id']?>">
				<button type="submit">Supprimer</button>
			</form>
			<?php
		}
	?>

<?php $this->stop('main_content') ?>