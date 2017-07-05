<?php
namespace Model;

class ArticlesModel extends \W\Model\Model{

     private function createFileName($size){
        for($name = ''; strlen($name)< $size;){
            $a = rand(1,3);
            if($a == 1){
                $name .= chr(rand(48,57));
            } else {
                $name .= chr(rand(97,122));
            }
        }
        return $name;
     }

     private function uploadFile($dataFile){
        if(isset ($dataFile['article_picture']['error'])){
            $fileError = $dataFile['article_picture']['error'];
            
            if($fileError == 1 OR $fileError == 2 OR $dataFile['article_picture']['size'] > 512000){
                $_SESSION['error'] = "fichier trop grand";
                return false;
            }
            
            if($fileError == 3){
                $_SESSION['error'] = "fichier mal téléchargé";
                return false;
            }
            
            if($fileError == 4){
                $_SESSION['error'] = "Aucun fichier selectionné";
                return false;
            }
            
            if($fileError > 4){
                $_SESSION['error'] = "Erreur inconnue";
                return false;
            }
            
            if(!isset($_SESSION['error'])){
                $fileTypeMime = finfo_file(finfo_open(FILEINFO_MIME_TYPE),$dataFile['article_picture']['tmp_name']);
                //vérification du type de fichier
                if($fileTypeMime != 'image/jpeg' AND $fileTypeMime != 'image/png'){
                    $_SESSION['error'] = "Fichier Interdit";   //Si ce n'est pas un png ou un jpeg
                    return false;
                }

              
                    $newFileName = $this->createFileName(15);
                    if($fileTypeMime == "image/png"){ //vérification du type mime du fichier si c'est un png 
                        $newFileExt = ".png"; //on créer une variable extention qui prendra le .png
                    } else if($fileTypeMime == "image/jpeg"){
                        $newFileExt = ".jpg";// pareil pour le jpeg
                    }
                    $newName = $newFileName.$newFileExt; //on concatène le nouveau nom généré aléatoirement et l'extension
                    if(file_exists('assets/upload/'.$newName)){ //si le fichier existe déjà on entre dans la condition
                        while(file_exists('assets/upload/'.$newName)){
                            $newName = $this->createFileName(15).$newFileExt; //On boucle jusqu'a ce que le fichier n'existe pas pour éviter les soucis de doublons
                        }
                    }

                }
            }
            $fileUrl = 'upload/'.$newName;
            if(!$test = move_uploaded_file($dataFile['article_picture']['tmp_name'], 'upload/'.$newName)){ //on déplace notre fichier
              $_SESSION['error'] = 'error';
            }
            return $fileUrl;
     }

     public function createArticle($dataArticle, $dataFile){
         
        if(empty($dataArticle)){
            $_SESSION['error'] = 'Veuillez remplir tous les champs';
            return false;
        }
        if(strlen($dataArticle['title']) < 4 ){
            $_SESSION['error'] = 'Veuillez saisir un titre d\'au moins 4 caractères';
            return false;
        }
        if($dataArticle['system'] == 'null'){
            $_SESSION['error'] = 'Erreur type d\'article incorrect';
            return false;
        }
        if($dataArticle['system'] == 'null'){
            $_SESSION['error'] = 'Erreur type de console incorrect';
            return false;
        }
        if(empty($dataArticle['article_content'])){
            $_SESSION['error'] = 'Ce champ ne peut pas etre vide!';
            return false;
        }
        $urlImage = $this->uploadFile($dataFile);
        if(!$urlImage){
            return false;
        }
        $dataArticle['article_resume'] = substr($dataArticle['article_content'],0, $lenght = 150) . '...';
        $dataArticle['article_picture'] = $urlImage;
        $dataArticle['author'] = $_SESSION['user']['user_name'];
        $newArticle = $this->insert($dataArticle);
        
        $sql = 'INSERT INTO article_system (`id_article`, `id_system`) VALUES ('.$newArticle['id'] .','.$dataArticle['system'].')';

        $sth = $this->dbh->prepare($sql);
        //$sth->bindValue(':id', $id);
        if($sth->execute()){
            $sql = 'INSERT INTO article_type (`id_article`, `id_types`) VALUES ('.$newArticle['id'] .','.$dataArticle['article_type'].')';

            $sth = $this->dbh->prepare($sql);
            //$sth->bindValue(':id', $id);
            if($sth->execute()){
                return true;
            } else {
                return false;
            }
        }
        return false;

        
     }
}