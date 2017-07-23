<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <div id="filter">
	    <label for="consolefilter">trier par consoles :</label>
	    <select id="consolefilter">
	    <?php foreach($systems as $system){?>
	        <option value="<?= $system['id'] ?>"><?= $system['system_name'] ?></option>
	    <?php }?>
	    </select>
    </div>

    <div class="row boitescolonnehaute">
    	<?php foreach ($articles as $key => $article) { ?>
    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite1">
    		<div class="box">
    			<a href="<?= $this->url('default_view',  ['id' =>$article['id']])?>" class="col-sm-4"><img class="articleImg" src="<?= $this->assetUrl($article['article_picture']) ?>"></a>
    			<div class="col-sm-8">
                    <a href="<?= $this->url('default_view',  ['id' =>$article['id']])?>"><h2><?= $article['title']?></h2></a>
        			<p class="articleText"><?= $article['article_resume']?></p>
        			<a href="<?= $this->url('default_view',  ['id' =>$article['id']])?>">
        				<span class="fa fa-plus-circle"> lien vers l'article -></span>
        			</a>
                </div>
    		</div>
    	</div>
    	<?php       $next = $key + 1; //Vu que la clé commence a 0 on incrémente de un pour comparer avec le nombre total d'élémentd
            if(($key % 2 !== 0 && $key !== 0 )|| ($key % 2 == 0 &&  $next == count($articles)) ){
                //Si key n'est pas pair et que ce n'est pas le premier élément (0) OU si la clé est pair et si il n'y a pas d'autres éléménets après (cette condition est la pour fermer ma div)
                ?>
                </div>
                <?php
                if($next < count($articles)){ 
                /*Si on est pas a la fin de notre tableau on réouvre une div avec la classe line*/?>
                <div class="row boitescolonnehaute">
                <?php
                }
            }
?>
    	<?php } ?>
    </div>
    
</div>
<div id="pagination" class="">
        <ul>
            <li><a href="#" id="flecheg">
                    <span class="fa fa-arrow-left"></span>
                </a>
                <?php for ($i=1; $i < $nbPages; $i++) { ?>
                    <li><a href="?page=<?= $i ?>"><?= $i ?></a></li>
                <?php } ?>
           
        

            <li><a href="#" id="fleched">
                    <span class="fa fa-arrow-right"></span>
                </a>
        </ul>
</div>

<?php $this->stop('main_content') ?>
