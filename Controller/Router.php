<?php

require_once 'Controller/ControllerPage.php';
require_once 'Controller/ControllerAdmin.php';
require_once 'Controller/ControllerPictures.php';
require_once 'Controller/ControllerMail.php';
require_once 'Controller/ControllerComments.php';
require_once 'View/View.php';

class Router {

    private $ctrlPage;
    private $ctrlAdmin;
    private $ctrlPictures;
    private $ctrlMail;
    private $ctrlComments;

    public function __construct() {
        $this->ctrlPage = new ControllerPage();
        $this->ctrlAdmin = new ControllerAdmin();
        $this->ctrlPictures = new ControllerPictures();
        $this->ctrlMail = new ControllerMail();
        $this->ctrlComments = new ControllerComments();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequest() {
        try {
            if (isset($_GET['action'])) {

                if (($_GET['action'] == 'About')) {
                    $this->ctrlPage->about();
                }   else if (($_GET['action'] == 'Portfolio')) {
                    $this->ctrlPage->portfolio();
                }   else if (($_GET['action'] == 'Portrait')) {
                    $this->ctrlPage->portrait();
                }   else if (($_GET['action'] == 'Animal')) {
                    $this->ctrlPage->animal();
                }   else if (($_GET['action'] == 'Landscape')) {
                    $this->ctrlPage->landscape();
                }   else if (($_GET['action'] == 'Application')) {
                    $this->ctrlPage->application();
                }   else if (($_GET['action'] == 'Contact')) {
                    $this->ctrlPage->contact();
                }   else if (($_GET['action'] == 'Confidential')) {
                    $this->ctrlPage->confidential();
                }   else if (($_GET['action'] == 'Mentions')) {
                    $this->ctrlPage->mentions();
                }   else if (($_GET['action'] == 'Login')) {
                    $this->ctrlPage->login();
                }   else if ($_GET['action'] == 'Connection') {
                    $pseudo = $this->getParameter($_POST, 'pseudo');
                    $mdp = $this->getParameter($_POST, 'mot_de_passe');
                    $this->ctrlAdmin->connection($pseudo, $mdp);
                }   else if (($_GET['action'] == 'Disconnection')) {
                    $this->ctrlPage->disconnection();
                }   else if (($_GET['action'] == 'LoginError')) {
                    $this->ctrlPage->loginError();
                }   else if (($_GET['action'] == 'Admin')) {
                    $this->ctrlPage->admin();
                }   else if ($_GET['action'] == 'AddNewComments') {
                    $pseudoComment = $this->getParameter($_POST, 'pseudo');
                    $emailComment = $this->getParameter($_POST, 'email');
                    $contentComment = $this->getParameter($_POST, 'content');
                    $this->ctrlComments->AddNewComments($pseudoComment, $emailComment, $contentComment); 
                }   else if ($_GET['action'] == 'DeleteComments') {
                    $idComment = $this->getParameter($_GET, 'id');
                    $this->ctrlComments->DeleteComments($idComment); 
                }   else if (($_GET['action'] == 'AddPictures')) {
                    $this->ctrlPage->addPictures();           
                }   else if ($_GET['action'] == 'AddNewPicsPortrait') {
                    $titlePicsPortrait = $this->getParameter($_POST, 'title');
                    $contentPicsPortrait = $this->getParameter($_POST, 'content');
                    $this->ctrlPictures->AddNewPicsPortrait($titlePicsPortrait, $contentPicsPortrait);
                }   else if ($_GET['action'] == 'DeletePicsPortrait') {
                    $idPicsPortrait = $this->getParameter($_GET, 'id');
                    $this->ctrlPictures->DeletePicsPortrait($idPicsPortrait); 
                }   else if ($_GET['action'] == 'AddNewPicsAnimal') {
                    $titlePicsAnimal = $this->getParameter($_POST, 'title');
                    $contentPicsAnimal = $this->getParameter($_POST, 'content');
                    $this->ctrlPictures->AddNewPicsAnimal($titlePicsAnimal, $contentPicsAnimal);
                }   else if ($_GET['action'] == 'DeletePicsAnimal') {
                    $idPicsAnimal = $this->getParameter($_GET, 'id');
                    $this->ctrlPictures->DeletePicsAnimal($idPicsAnimal); 
                }   else if ($_GET['action'] == 'AddNewPicsLandscape') {
                    $titlePicsLandscape = $this->getParameter($_POST, 'title');
                    $contentPicsLandscape = $this->getParameter($_POST, 'content');
                    $this->ctrlPictures->AddNewPicsLandscape($titlePicsLandscape, $contentPicsLandscape);
                }   else if ($_GET['action'] == 'DeletePicsLandscape') {
                    $idPicsLandscape = $this->getParameter($_GET, 'id');
                    $this->ctrlPictures->DeletePicsLandscape($idPicsLandscape); 
                }   else if ($_GET['action'] == 'Mail') {
                    $pseudoContact = $this->getParameter($_POST, 'pseudo');
                    $emailContact = $this->getParameter($_POST, 'email');
                    $contentContact = $this->getParameter($_POST, 'content');
                    $this->ctrlMail->mailto($pseudoContact, $emailContact, $contentContact); 
                }   else {
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

