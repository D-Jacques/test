<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\TypesModel;

class DefaultController extends Controller
{
	public function __construct(){
		$this->article = new ArticlesModel;
		$this->type = new TypesModel;
	}
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$nbPages = $this->getNbPages(6);
		$startOffset = 6 *($page - 1);
		$articles = $this->article->findAll('article_date','DESC', 6, $startOffset);
		$this->show('default/home', ['articles' => $articles, 'nbPages' => $nbPages]);
	}

	public function getArticlesByTypes($article_type)
	{
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
		$type = $this->type->search(['article_type' => $article_type]);
		$nbPages = $this->getNbPages(6, $type[0]['id']);
		$startOffset = 6 *($page - 1);
		$articles = $this->article->searchByType($article_type, 6, $startOffset);
		$this->show('default/home', ['articles' => $articles, 'nbPages' => $nbPages]);
	}

	public function whoAreWe(){
		$this->show('default/quisommesnous');
	}

	public function informations(){
		$this->show('default/informationlegales');
	}

	public function faq(){
		$this->show('default/faq');
	}

	public function contactPage(){
		$this->show('default/contact');
	}

	public function getNbPages($articleParPage, $type = NULL){
		$totalArticle = $this->article->articleCount($type);

			$nbPage = ($totalArticle / $articleParPage);
			if (is_float($nbPage)){
				$nbPage = $nbPage + 1;
			}

		return $nbPage;
	}
}
