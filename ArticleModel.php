<?php
namespace Model;

class ArticlesModel extends \W\Model\Model{
    foreach ($data as $key => $value) {
        if(empty($value)){
            $_SESSION['error'] = 'Veuillez remplir tous les champs';
            return false;
        }
        if($key == 'titre' && strlen($value) < 4 ){
            $_SESSION['error'] = 'Veuillez saisir un titre d\'au moins 4 caractères';
            return false;
        }
        if($key == 'content_type' && $value!= 'News' && $value!= 'Sorties' && $value!= 'Event' && $value!= 'Mise à jour' && $value!= 'Dossier'){
            $_SESSION['error'] = 'Veuillez entrer un contenue valide';
        }
        if($key == 'content_article' && empty($value)){
            $_SESSION['error'] = 'Ce champ ne peut pas etre vide!';
        }
    }
}