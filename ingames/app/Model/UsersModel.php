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
		$userData['user_type'] = 'visiteur';
        if($userData['user_password'] != $userData['user_verification']){
            $_SESSION['error'] = 'Les mots de passe ne correspondent pas !';
            return false;
        }
		$userData['user_password'] = $this->auth->hashPassword($_POST['user_password']);
		if($userData['user_name'] == '' ||
			strlen($userData['user_name']) < 4 ){
			$_SESSION['error'] = 'L\'identifiant doit comporter au moins 4 caractères';
			return false;
		}
        if($this->usernameExists($userData['user_name'])){
            $_SESSION['error'] = 'Ce pseudo est déjà utilisé';
            return false;
        }
        if(!filter_var($userData['user_mail'], FILTER_VALIDATE_EMAIL)){
			$_SESSION['error'] = 'email incorrect';
			return false;
		}
        if($this->emailExists($userData['user_mail'])){
            $_SESSION['error'] = 'L\'email existe déjà';
            return false;
        }
        unset($userData['user_verification']);
        return $this->insert($userData);
    }
}