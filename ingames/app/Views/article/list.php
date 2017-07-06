<?php $this->layout('layout', ['title' => 'Liste des articles']) ?>

<?php $this->start('main_content') ?>
	<h2>Liste des articles.</h2>

	<?php
		if(empty($articles)){
			echo 'Vous n\'avez pas d\'articles, Veuillez en creer en cliquant sur Ajouter un article <br>';
		} else {
			foreach($articles as $article){
				?>
				<img src="<?= $this->assetUrl($article['article_picture'])?>"><br>
				<?php
				echo $article['title'].'<br>';
				echo $article['article_resume'].'<br>';
				?>
				<a href="<?= $this->url('article_update', ['id' =>$article['id']])?>">Modifier</a>
				<form class="deleteForm" method="POST" action="<?= $this->url('article_delete') ?>">
					<input type="hidden" name="id" value="<?= $article['id']?>">
					<button type="submit">Supprimer</button>
				</form>
				<?php
			}
		}
	?>

	<a href="<?= $this->url('article_create'); ?>">Ajouter un article</a>

<?php $this->stop('main_content') ?>

<?php $this->start('script')?>
	<script type="text/javascript">
		$('.deleteForm').submit(function(e){
			confirm("Voulez vous vraiment supprimer l'article ?");
		});
	</script>
<?php $this->stop('script') ?>