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

public function addNewPics($titlePics, $contentPics) {
    
    if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    //1. strrchr renvoie l'extension avec le point (« . »).
    //2. substr(chaine,1) ignore le premier caractère de chaine.
    //3. strtolower met l'extension en minuscules.
    $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
    
    $nom = "Contents/Pictures/{$titlePics}.{$extension_upload}";
    $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
    if ($resultat) echo "Transfert réussi";
    $link = $nom;
  
    // // Sauvegarde du billet
    $this->pictures->addNewPicsBDD($link, $titlePics, $contentPics);
    header("location: Admin");
}


}