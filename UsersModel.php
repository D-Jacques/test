<?php
namespace Model;
use \W\Security\AuthentificationModel;
use \W\Model\ConnectionModel;

class UsersModel extends \W\Model\UsersModel{
    public function __construct(){
        $app = getApp();
        $this->setTable($app->getConfig('security_user_table'));
		$this->auth = new AuthentificationModel;
		$this->dbh = ConnectionModel::getDbh();
    }
    public function createUser($userData){
		$userData['role'] = 'visiteur';
		$userData['password'] = $this->auth->hashPassword($_POST['password']);
		if($userData['username'] == '' ||
			strlen($userData['username']) < 4 ){
			$_SESSION['error'] = 'L\'identifiant doit comporter au moins 4 caractères';
			return false;
		}
        if($this->usernameExists($userData['username'])){
            $_SESSION['error'] = 'Ce pseudo est déjà utilisé';
            return false;
        }
        if(!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)){
			$_SESSION['error'] = 'email incorrect';
			return false;
		}
        if($this->emailExists($userData['email'])){
            $_SESSION['error'] = 'L\'email existe déjà';
            return false;
        }
        return $this->insert($userData);
    }
}