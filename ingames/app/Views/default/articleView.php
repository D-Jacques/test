<?php $this->layout('layout', ['title' => 'ingames - '.$article['title']]) ?>

<?php $this->start('main_content') ?>
<div class="container">
    <div id="lifeline">
        <a href="<?= $this->url('default_home')?>">Accueil</a>
        <a style="text-decoration:none">>>></a>
        <a style="text-decoration:underline">Article</a>
    </div>
    <div id="article" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <h2><?= $article['title'];?></h2>
        <p><?= $article['article_content'];?></p>
    </div>
    <div id="imgbanniere" class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <img src="<?= $this->assetUrl($article['article_picture']) ?>">
    </div>
</div>

<?php $this->stop('main_content') ?>