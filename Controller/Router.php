<?php

require_once 'Controller/ControllerPage.php';
require_once 'Controller/ControllerAdmin.php';
require_once 'Controller/ControllerPictures.php';
require_once 'View/View.php';
class Router {

    private $ctrlPage;

    public function __construct() {
        $this->ctrlPage = new ControllerPage();
        $this->ctrlAdmin = new ControllerAdmin();
        $this->ctrlPictures = new ControllerPictures();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequest() {
        try {
            if (isset($_GET['action'])) {

                if (($_GET['action'] == 'About')) {
                    $this->ctrlPage->about();
                } else if (($_GET['action'] == 'Portfolio')) {
                    $this->ctrlPage->portfolio();
                }  else if (($_GET['action'] == 'Portrait')) {
                    $this->ctrlPage->portrait();
                }  else if (($_GET['action'] == 'Animal')) {
                    $this->ctrlPage->animal();
                }  else if (($_GET['action'] == 'Landscape')) {
                    $this->ctrlPage->landscape();
                } else if (($_GET['action'] == 'Application')) {
                    $this->ctrlPage->application();
                } else if (($_GET['action'] == 'Contact')) {
                    $this->ctrlPage->contact();
                } else if (($_GET['action'] == 'Confidential')) {
                    $this->ctrlPage->confidential();
                } else if (($_GET['action'] == 'Mentions')) {
                    $this->ctrlPage->mentions();
                } else if (($_GET['action'] == 'Login')) {
                    $this->ctrlPage->login();
                } else if ($_GET['action'] == 'Connection') {
                    $pseudo = $this->getParameter($_POST, 'pseudo');
                    $mdp = $this->getParameter($_POST, 'mot_de_passe');
                    $this->ctrlAdmin->connection($pseudo, $mdp);
                } else if (($_GET['action'] == 'Disconnection')) {
                    $this->ctrlPage->disconnection();
                }  else if (($_GET['action'] == 'LoginError')) {
                    $this->ctrlPage->loginError();
                }  else if (($_GET['action'] == 'Admin')) {
                    $this->ctrlPage->admin();
                }  else if (($_GET['action'] == 'AddPictures')) {
                    $this->ctrlPage->addPictures();
                }  else if ($_GET['action'] == 'AddNewPics') {
                    $titlePics = $this->getParameter($_POST, 'title');
                    $contentPics = $this->getParameter($_POST, 'content');
                    $this->ctrlPictures->addNewPics($titlePics, $contentPics);
                }
                 else {
                    throw new Exception("Action non valide");
                    $this->ctrlPage->error();
                }
            } else {  // aucune action définie : affichage de l'accueil
                $this->ctrlPage->home();
            }
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    // Affiche une erreur
    private function error() {
        $view = new View("Error");
        $view->generate([]);
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
