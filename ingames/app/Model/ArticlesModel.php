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
                    } else if($fileTypeMime == "image/jpeg" || $fileTypeMime == "image/jpg"){
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
            if(!$test = move_uploaded_file($dataFile['article_picture']['tmp_name'], 'assets/upload/'.$newName)){ //on déplace notre fichier si il y'a eu un echec on retourne une erreur
              $_SESSION['error'] = 'error';
            }
            return $fileUrl;
     }

     public function createArticle($dataArticle, $dataFile){
         
         //Lors de l'étape de création on vérifie si les champs ne sont pas vide et qu'ils soient bien conforme
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
        //on coupe l'article pour faire un court extrait
        $dataArticle['article_resume'] = substr($dataArticle['article_content'],0, $lenght = 150) . '...';
        //On récupère le chemin ou est stocké l'image
        $dataArticle['article_picture'] = $urlImage;
        //On récupére, pour le nom de l'auteur, le nom de l'utilisateur qui est connecté (en Sachant que c'est un administrateur) 
        $dataArticle['author'] = $_SESSION['user']['user_name'];
        //Ensuite on insert les infos dans la base de donnée
        $newArticle = $this->insert($dataArticle);
        
        //on insère dans la table de pivot la liaison entre l'article et la console
        $sql = 'INSERT INTO article_system (`id_article`, `id_system`) VALUES ('.$newArticle['id'] .','.$dataArticle['system'].')';

        $sth = $this->dbh->prepare($sql);
        //$sth->bindValue(':id', $id);
        if($sth->execute()){
            //on insère dans la table de pivot la liaison entre l'article et le type d'article
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

     public function updateArticle($updateDataArticle, $idArticle, $dataFile){
        if(empty($updateDataArticle)){
            $_SESSION['error'] = 'Veuillez remplir tous les champs';
            return false;
        }
        if(strlen($updateDataArticle['title']) < 4 ){
            $_SESSION['error'] = 'Veuillez saisir un titre d\'au moins 4 caractères';
            return false;
        }
        // if($updateDataArticle['system'] == 'null'){
        //     $_SESSION['error'] = 'Erreur type d\'article incorrect';
        //     return false;
        // }
        // if($updateDataArticle['system'] == 'null'){
        //     $_SESSION['error'] = 'Erreur type de console incorrect';
        //     return false;
        // }
        if(empty($updateDataArticle['article_content'])){
            $_SESSION['error'] = 'Ce champ ne peut pas etre vide!';
            return false;
        }
        $urlImage = $this->uploadFile($dataFile);
        if(!$urlImage){
            $_SESSION['error'] = 'erreur sur l\'image';
            return false;
        }

        $updateDataArticle['article_resume'] = substr($updateDataArticle['article_content'],0, $lenght = 150) . '...';
        $updateDataArticle['article_picture'] = $urlImage;

        $updateArticle = $this->update($updateDataArticle, $idArticle);
        $sql = 'DELETE FROM article_system WHERE id_article='.$idArticle;
        $sth = $this->dbh->prepare($sql);
        if(!$sth->execute()){
            $_SESSION['error'] = 'Erreur lors de la suppression d\'un élément';
            return false;
        }
        $sql = 'DELETE FROM article_type WHERE id_article='.$idArticle;
        $sth = $this->dbh->prepare($sql);
        if(!$sth->execute()){
            $_SESSION['error'] = 'Erreur lors de la suppression d\'un élément';
            return false;
        }

        //$sql = 'UPDATE article_system  SET id_article =  ('.$newArticle['id'] .','.$dataArticle['system'].')';
        $sql = 'INSERT INTO article_system (`id_article`, `id_system`) VALUES ('.$updateArticle['id'] .','.$updateDataArticle['system'].')';

        $sth = $this->dbh->prepare($sql);
        //$sth->bindValue(':id', $id);
        if($sth->execute()){
            //on insère dans la table de pivot la liaison entre l'article et le type d'article
            $sql = 'INSERT INTO article_type (`id_article`, `id_types`) VALUES ('.$updateArticle['id'] .','.$updateDataArticle['article_type'].')';

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

     public function searchByType($type, $limit = null, $offset = null){
        $sql = 'SELECT * FROM article_type JOIN types ON types.id=article_type.id_types JOIN articles ON articles.id = article_type.id_article WHERE types.article_type LIKE :search';
        if($limit){
            $sql .= ' LIMIT '.$limit;
            if($offset){
                $sql .= ' OFFSET '.$offset;
            }
        }
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':search', $type);
        // foreach($search as $key => $value){
        //     $value = ($stripTags) ? strip_tags($value) : $value;
        //     $sth->bindValue(':'.$key, '%'.$value.'%');
        // }
        if(!$sth->execute()){
            return false;
        }

        return $sth->fetchAll();
     }

     public function articleCount($type = NULL){
        $sql = 'SELECT COUNT(id) as nbId FROM articles';
        if(!is_null($type)){
            $sql .= ' WHERE article_type = '.$type;
        }
        $sth= $this->dbh->prepare($sql);
        if($sth->execute()){
           $totalArticle = $sth->fetch();
           return intval($totalArticle['nbId']); 
        }
        return 0;
     }
}