<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <div id="filter">
	    <a>trier par consoles :</a>
	    <select id="consolefilter">
	    <option value="playstation">Playstation</option>
	    <option value="playstation2">Playstation2</option>
	    <option value="playstation3">Playstation3</option>
	    <option value="playstation4">Playstation4</option>
	    <option value="xbox360">xbox360</option>
	    <option value="xbox one">xbox one</option>
	    <option value="Wii U">Wii U</option>
	    <option value="nintendo Switch">Nintendo Switch</option>
	    <option value="PC">PC</option>
	    </select>
    </div>

    <div class="row boitescolonnehaute">
    	<?php foreach ($articles as $key => $article) { ?>
    	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite1">
    		<div class="box">
    			<a href="article.php"><img src="img/ps.jpg" id="imgboite1"></a>
    			<a href="article.php"><h2>News 1</h2></a>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
    			<a href="article">
    				<span class="fa fa-plus-circle"> lien vers l'article -></span>
    			</a>
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
            <li><a href="page1">1</a></li>
            <li><a href="page2">2</a></li>
            <li><a href="page3">3</a></li>
            <li><a href="page4">4</a></li>
            <li><a href="page5">5</a></li>
            <li><a href="#" id="fleched">
                    <span class="fa fa-arrow-right"></span>
                </a>
        </ul>
</div>

<?php $this->stop('main_content') ?>
