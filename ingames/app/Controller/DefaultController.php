<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;

class DefaultController extends Controller
{
	public function __construct(){
		$this->article = new ArticlesModel;
	}
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$articles = $this->article->findAll();
		$this->show('default/home', ['articles' => $articles]);
	}

	public function getArticlesByTypes($article_type)
	{
		$articles = $this->article->searchByType($article_type);
		$this->show('default/home', ['articles' => $articles]);
	}

}

