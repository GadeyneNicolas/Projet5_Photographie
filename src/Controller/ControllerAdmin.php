<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Model\AdminDAO;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerAdmin {
        private $admin;

        public function __construct() {
            $this->admin = new AdminDAO();
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
} // Fin de la classe