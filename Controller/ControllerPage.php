<?php

require_once 'View/View.php';

class ControllerPage {

    public function __construct() {
       
    }

// Affiche la liste de tous les billets du blog
    public function home() {
        $view = new View("Home");
        $view->generate(array(''));
    }

}

