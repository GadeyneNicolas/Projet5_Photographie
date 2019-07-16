<?php

require_once 'Model/Admin.php';
require_once 'Model/Pictures.php';
require_once 'View/View.php';

class ControllerPictures {
        private $admin;
        private $pictures;

        public function __construct() {
            $this->admin = new Admin();
            $this->pictures = new Pictures();
        }

    public function addNewPicsPortrait($titlePicsPortrait, $contentPicsPortrait) {
        
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomPortrait = "Contents/Pictures/{$titlePicsPortrait}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomPortrait);
        $linkPortrait = $nomPortrait;
    
        // // Save Pictures
        $this->pictures->addNewPicsBDDPortrait($linkPortrait, $titlePicsPortrait, $contentPicsPortrait);
        header("location: Admin");
    }

    // Delete Pictures
    public function DeletePicsPortrait($idPicsPortrait) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDPortrait($idPicsPortrait);
            header("Location: Admin");
        } else {
            header("Location: Login");
        }
    }

    public function addNewPicsAnimal($titlePicsAnimal, $contentPicsAnimal) {  
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomAnimal = "Contents/Pictures/{$titlePicsAnimal}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomAnimal);
        $linkAnimal = $nomAnimal;
    
        // // Save pictures
        $this->pictures->addNewPicsBDDAnimal($linkAnimal, $titlePicsAnimal, $contentPicsAnimal);
        header("location: Admin");
    }

    // Delete Pictures
    public function DeletePicsAnimal($idPicsAnimal) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDAnimal($idPicsAnimal);
            header("Location: Admin");
        } else {
            header("Location: Login");
        }
    }

    public function addNewPicsLandscape($titlePicsLandscape, $contentPicsLandscape) {
        
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomLandscape = "Contents/Pictures/{$titlePicsLandscape}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomLandscape);
        $linkLandscape = $nomLandscape;
    
        // // Sauvegarde du billet
        $this->pictures->addNewPicsBDDLandscape($linkLandscape, $titlePicsLandscape, $contentPicsLandscape);
        header("location: Admin");
    }

    // Delete Pictures
    public function DeletePicsLandscape($idPicsLandscape) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDLandscape($idPicsLandscape);
            header("Location: Admin");
        } else {
            header("Location: Login");
        }
    }
} // Fin de la classe