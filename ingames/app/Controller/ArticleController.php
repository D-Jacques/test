<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;

class ArticleController extends Controller{

	/*création de l'attribut qui contiendra l'instanciation de notre nouvel article*/
	protected $article;

	public function __construct(){
		$this->article = new ArticlesModel;
	}

	//methode d'ajout d'article qui va intéragir avec une méthode d'ArticleModel qui lui communiquera avec la base de données
	public function create(){
		//Si on écrit un lien hypertext
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('article/create');
		} else {
			//Si l'ajout s'est bien déroulé on retourne sur la page de création accompagné de son message de succès stocké dans l'hyper gobale $_SESSION
			if($newArticle = $this->article->createArticle($_POST, $_FILES)){
				$_SESSION['success'] = 'Votre article a bien été crée !';
				$this->redirectToRoute('article_create');
			//Si il y'a erreur on retourne sur la page de création, article modèle se chargera de transmettre l'erreur spécifique
			} else {
				$this->redirectToRoute('article_create');
			}
		}
	}
}