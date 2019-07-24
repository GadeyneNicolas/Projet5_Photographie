<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Model\PicturesDAO;
use NGADEYNE\Projet5_Photographie\Model\CommentsDAO;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerPage {
    
    private $pictures;
    private $comments;

    public function __construct() {
        $this->pictures = new PicturesDAO();
        $this->comments = new CommentsDAO();
    }

// Affiche la liste de tous les billets du blog
    public function home() {
        $view = new View("Home");
        $view->generate([]);
    }

    public function about() {
        $view = new View("About");
        $view->generate([]);
    }

    public function portfolio() {
        $view = new View("Portfolio");
        $view->generate([]);
    }

    public function portrait() {
        $picturesPortrait =  $this->pictures->getPicsBDDPortrait();
        $view = new View("Portrait");
        $view->generate(array('picturesPortrait' => $picturesPortrait));
    }

    public function animal() {
        $picturesAnimal =  $this->pictures->getPicsBDDAnimal();
        $view = new View("Animal");
        $view->generate(array('picturesAnimal' => $picturesAnimal));
    }

    public function landscape() {
        $picturesLandscape =  $this->pictures->getPicsBDDLandscape();
        $view = new View("Landscape");
        $view->generate(array('picturesLandscape' => $picturesLandscape));
    }

    public function application() {
        $comments =  $this->comments->getCommentsBDD();
        $view = new View("Application");
        $view->generate(array('comments' => $comments));
    }

    public function faq() {
        $view = new View("Faq");
        $view->generate([]);
    }

    public function contact() {
        $view = new View("Contact");
        $view->generate([]);
    }

    public function confidential() {
        $view = new View("Confidential");
        $view->generate([]);
    }

    public function mentions() {
        $view = new View("Mentions");
        $view->generate([]);
    }

    public function admin() {
        $picturesPortrait =  $this->pictures->getPicsBDDPortrait();
        $picturesAnimal =  $this->pictures->getPicsBDDAnimal();
        $picturesLandscape =  $this->pictures->getPicsBDDLandscape();
        $comments =  $this->comments->getCommentsBDD();
        $view = new View("Admin");
        $view->generate(array('comments' => $comments, 'picturesPortrait' => $picturesPortrait, 'picturesAnimal' => $picturesAnimal, 'picturesLandscape' => $picturesLandscape));
    }

    public function login() {
        $view = new View("Login");
        $view->generate([]);
    }
    
    public function loginError() {
        $view = new View("LoginError");
        $view->generate([]);
    }

    public function addPictures() {
        $view = new View("AddPictures");
        $view->generate([]);
    }
} // Fin de la classe
