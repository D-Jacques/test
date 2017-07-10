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

	////////////////FONCTION SPECIALE CAPTCHA//////////////////
    public function isRecaptchaValid($code, $ip = null)
    {
        if(empty($code)) {
            return false;
        }
        $params = [
            'secret'    => '6LfkRigUAAAAAIrkWTp1qBEgCLinBPYzBLAiZw8Q',
            'response'  => $code
        ];
        if($ip){
            $params['remoteip'] = $ip;
        }
        $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            $response = file_get_contents($url);
        }
        if(empty($response) || is_null($response)){
            return false;
        }
        $json = json_decode($response);
        if($json->success){
        	return true;
        }
    }
///////////////////////////////////////////////////////////////////////

	public function home(){
		$this->allowTo('admin');
		$this->show('/admin/admin_home');
	}

	public function inscription(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){
			$this->show('user/inscription');
		} else {
			if(isset($_POST['g-recaptcha-response'])){
		        if($this->isRecaptchaValid($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR'])){
		        	unset($_POST['g-recaptcha-response']);
		            if($newUser = $this->user->createUser($_POST)){
						$_SESSION['success'] = 'Votre inscription est réussie, vous pouvez vous connecter';
						$this->redirectToRoute('admin_inscription');
					} else {
					$this->redirectToRoute('admin_inscription');
					}
		        } else {
		            $_SESSION['error'] = "erreur le captcha n\'est pas valide";
		            $this->show('user/inscription');
		        }
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