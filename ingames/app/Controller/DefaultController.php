<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ArticlesModel;
use Model\TypesModel;
use Model\SystemModel;

class DefaultController extends Controller
{
    //contructeur du DefaultController
	public function __construct(){
		$this->article = new ArticlesModel;
        $this->System = new SystemModel;
		$this->type = new TypesModel;
	}
	/**
	 * Page d'accueil par défaut
	 */
    
    
	public function home()
	{
        //si dans le lien on a une variable passée en methode GET qui est définie, la page correspond a cette valeur sinon si rien n'est indiqué c'est qu'on est sur la page 1 par défaut
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}else{
			$page = 1;
		}
        //on appelle une fonction qui nous permet de savoir combien de page on va avoir besoin pour afficher la totalitée des articles
		$nbPages = $this->getNbPages(6);
        
        //startOffset a partir de quel article on commence a afficher
		$startOffset = 6 *($page - 1);
        //On va chercher tous les articles dans notre base de donnée, ils sont triés par date d'ajout dans l'ordre décroissant, on en prend que 6, et on indique le numéro d'entrée par lequel on commence a collecter les infos
		$articles = $this->article->findAll('article_date','DESC', 6, $startOffset);
        //on va chercher tout les types de consoles dans la table ou sont stockés toutes les consoles
        $System = $this->System->findAll();
        //on affiche la page d'accueil, en envoyant les articles récuperer par la vaiable $articles, le nombre de pages stocké dans nbPages, et les consoles inscrites dans la base de donnée
		$this->show('default/home', ['articles' => $articles, 'nbPages' => $nbPages, 'systems' => $System]);
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
		$articles = $this->article->searchByType($article_type, 6, $startOffset, 'DESC');
        $System = $this->System->findAll();
		$this->show('default/home', ['articles' => $articles, 'nbPages' => $nbPages, 'systems' => $System]);
	}

    public function view($id){
        $articleData = $this->article->find($id);
        $this->show('default/articleView', ['article' => $articleData]);
        
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
