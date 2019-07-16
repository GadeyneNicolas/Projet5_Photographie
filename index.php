<?php
session_start ();

require 'Controller/Router.php';

$router = new Router();
$router->routerRequest();

// Projet 5 de la formation DWJ d'Openclassrooms.
// Voir le README pour plus d'infos.
