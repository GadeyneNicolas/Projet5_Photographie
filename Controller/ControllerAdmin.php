<?php

require_once 'Model/Admin.php';
require_once 'View/View.php';

class ControllerAdmin {

private $admin;

public function __construct() {
    $this->admin = new Admin();
}

public function connection($pseudo, $mdp) {
    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = $this->admin->connectionAdmin($pseudo, $mdp);

    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $this->admin->getId($pseudo);
        $_SESSION['pseudo'] = $pseudo;

        header('Location: Admin');
    
    } else {
        header('Location: LoginError');
    }   
 }
}