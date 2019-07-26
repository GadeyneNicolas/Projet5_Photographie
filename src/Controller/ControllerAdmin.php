<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Model\AdminDAO;

class ControllerAdmin {
    
    private $admin;

    public function __construct() {
        $this->admin = new AdminDAO();
    }

    public function connection($pseudo, $mdp) {
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = $this->admin->connectionAdmin($pseudo, $mdp);
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $this->admin->getId($pseudo);
            $_SESSION['pseudo'] = $pseudo;

            header('Location: Admin');
        } else {
            header('Location: LoginError');
        }   
    }

    public function disconnection()
    {
        // On détruit les variables de notre session
        session_unset ();
        // On détruit notre session
        session_destroy ();
        // On redirige le visiteur vers la page d'accueil
        header ('location: Home');
    }

} // Fin de la classe