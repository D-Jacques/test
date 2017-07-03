<?php

namespace Controller;

//on va utiliser le use ci dessous pour faire hériter AdminController de la classe Controller inclut dans le framework W
use \W\Controller\Controller;
//on insert ces use pour pouvoir creer nos objets d'authentification et user pour permettre la création d'utilisateurs
use \W\Security\AuthentificationModel;
use Model\UsersModel;

/**
* Classe qui va appeler la création d'utilisateurs
*/
class AdminController extends Controller{
	
	protected $authentification; //création d'un objet pour l'authentification de l'utilisateur
	protected $user; //On creer un nouvel objet user qui stockera les infos que l'utilisateur a rentré

	public function __construct(){
		$this->authentification = new AuthentificationModel;
		$this->user = new UsersModel;
	}
	public function inscription(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('user/inscription');
		} else {
			if($newUser = $this->user->createUser($_POST)){
				$_SESSION['success'] = 'Votre inscription est réussie, vous pouvez vous connecter';
				$this->redirectToRoute('admin_inscription');

			} else {
				$this->redirectToRoute('admin_inscription');
			}
		}
	}

	public function connection(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('user/inscription');
		} else {
			$userId = $this->authentification->isValidLoginInfo($_POST['usernameOrEmail'],$_POST['userPassword']); //si les identifiants de l'utilisateurs sont bon; on retourne son identifiant pré-attribué lors de son inscription qui se trouve dans la base de donnée
			if($userId !== 0){
				$this->authentification->logUserIn($this->user->find($userId));
				$_SESSION['success'] = 'Vous êtes maintenant connecté !';
				$this->redirectToRoute('default_home');
			} else {
				$_SESSION['error'] = "Erreur votre identifiant ou votre mot de passe est incorrect";
				$this->redirectToRoute('default_home');
			}

		}
	}

	public function disconnect(){
		$this->authentification->logUserOut();
		$this->redirectToRoute('default_home');
	}


}