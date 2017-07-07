<?php require_once('header.php'); ?>
<div class="container">
    <div id="lifeline">
        <a href="index.php">Accueil</a>
        <a style="text-decoration:none">>>></a>
        <a style="text-decoration:underline">Event</a>
    </div>
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
    <div id="boitescolonnehaute" class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite1">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite1"></a>
                <a href="#"><h2>Event 1</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite2">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite2"></a>
                <a href="#"><h2>Event 2</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
    </div>
    <div id="boitescolonnemilieu" class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite3">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite3"></a>
                <a href="#"><h2>Event 3</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite4">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite1"></a>
                <a href="#"><h2>Event 4</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
    </div>
    <div id="boitescolonnebasse" class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite5">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite2"></a>
                <a href="#"><h2>Event 5</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="boite6">
            <div class="box">
                <a href="#"><img src="img/game-event.png" id="imgboite3"></a>
                <a href="#"><h2>Event 6</h2></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum praesentium ab repellat, quidem libero, perspiciatis. Numquam dolor nihil tempore dolore quos, eligendi labore perspiciatis aut quaerat, quae maxime debitis ullam!</p>
                <a href="article">
                    <span class="fa fa-plus-circle"> lien vers l'article -></span>
                </a>
            </div>
        </div>
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
<?php require_once('footer.php');?>