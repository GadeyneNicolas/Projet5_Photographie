<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerMail {
    public function mailto()
    {
        if($_POST) {

        $pseudoContact = $_POST["pseudo"];
        $emailContact = $_POST["email"];
        $contentContact = $_POST["content"];


        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $_POST["email"] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Nom : </b>' . $_POST["pseudo"] . '<br>
            <b>Email : </b>' . $_POST["email"] . '<br>
            <b>Message : </b>' . $_POST["content"] . '</p>';

        mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
        }
    }
}  // Fin de la classe  
