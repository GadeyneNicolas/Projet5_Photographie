<?php

require_once 'Controller/ControllerPage.php';
require_once 'View/View.php';
class Router {

    private $ctrlPage;

    public function __construct() {
        $this->ctrlPage = new ControllerPage();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequest() {
        try {
            if (isset($_GET['action'])) {
            
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlPage->home();
            }
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    // Affiche une erreur
    private function error($msgError) {
        $view = new View("Error");
        $view->generate(array('msgErreur' => $msgError));
    }

    // Recherche un paramètre dans un tableau
    private function getParameter($array, $name) {
        if (isset($array[$name])) {
            return $array[$name];
        }
        else
            throw new Exception("Paramètre '$name' absent");
    }

}
