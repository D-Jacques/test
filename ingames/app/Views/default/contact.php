<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <div class="container">
       <div class="row">
            <div id="lifeline">
                <a href="index.php">Accueil</a>
                <a style="text-decoration:none">>>></a>
                <a style="text-decoration:underline">nous contacter</a>
            </div>
            <form role="form" id="contact-form" class="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="Votre e-mail ici">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Votre message ici"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="pull-center">Envoyez</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>

<?php $this->stop('main_content') ?>