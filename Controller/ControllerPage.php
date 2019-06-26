<?php

require_once 'View/View.php';

class ControllerPage {

    public function __construct() {
       
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
        $view = new View("Portrait");
        $view->generate([]);
    }

    public function animal() {
        $view = new View("Animal");
        $view->generate([]);
    }

    public function landscape() {
        $view = new View("Landscape");
        $view->generate([]);
    }

    public function application() {
        $view = new View("Application");
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
        $view = new View("Admin");
        $view->generate([]);
    }

    public function login() {
        $view = new View("Login");
        $view->generate([]);
    }
}

