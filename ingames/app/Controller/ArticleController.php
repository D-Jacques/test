<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\SystemModel;
use Model\TypesModel;

class ArticleController extends Controller{

	/*création de l'attribut qui contiendra l'instanciation de notre nouvel article*/
	protected $article;

	public function __construct(){
		$this->article = new ArticlesModel;
		$this->types = new TypesModel;
		$this->System = new SystemModel;
	}

	//methode d'ajout d'article qui va intéragir avec une méthode d'ArticleModel qui lui communiquera avec la base de données
	public function create(){
		$this->allowTo('admin');
		//Si on écrit un lien hypertext
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$types = $this->types->findAll();
			$System = $this->System->findAll();
			$this->show('article/create', ['types' => $types, 'systems' => $System]);
		} else {
			//Si l'ajout s'est bien déroulé on retourne sur la page de création accompagné de son message de succès stocké dans l'hyper gobale $_SESSION
			if($newArticle = $this->article->createArticle($_POST, $_FILES)){
				$_SESSION['success'] = 'Votre article a bien été crée !';
				$this->redirectToRoute('article_list');
			//Si il y'a erreur on retourne sur la page de création, article modèle se chargera de transmettre l'erreur spécifique
			} else {
				$this->redirectToRoute('article_create');
			}
		}
	}

	public function list(){
		$this->allowTo(['admin']);
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			//récupération des articles
			$articlesList = $this->article->findAll();
			//affichage de la page tout en envoyant les articles
			$this->show('article/list', ['articles' => $articlesList]);
		}
	}

	public function delete(){
		$this->allowTo('admin');
		if($deletedArticle = $this->article->delete($_POST['id'])){
			//Redirecion sur la page qui liste tout les articles après la suppression d'un article avec un message de succès ou d'erreur en fonction de comment s'est déroulé la procédure
			$_SESSION['success'] = 'article supprimé !';
			$this->redirectToRoute('article_list');
		} else {
			$_SESSION['error'] = 'Erreur lors de la suppression';
			$this->redirectToRoute('article_list');
		}
	}

	public function update($id){
		$this->allowTo('admin');
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$types = $this->types->findAll();
			$System = $this->System->findAll();
			$article = $this->article->find($id);
			$this->show('article/update', ['article' => $article, 'types' => $types, 'systems' => $System]);
		} else {
			if($updateArticle = $this->article->updateArticle($_POST, $id, $_FILES)){
				$_SESSION['success'] = 'Article mis a jour';
				$this->redirectToRoute('article_list');
			} else {
				$_SESSION['error'] = 'Erreur lors de la mise a jour de l\'article';
				$this->redirectToRoute('article_update', ['id' => $id, 'types' => $types, 'systems' => $System]);
			}
		}
	}
}