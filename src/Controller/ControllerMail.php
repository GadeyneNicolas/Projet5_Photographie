<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerMail {
    public function mailto($pseudoContact, $emailContact, $contentContact)
    {
        // NAME
        if (empty($_POST["pseudo"])) {
            $errorMSG = "Name is required ";
        } else {
            $_POST["pseudo"] = $pseudoContact;
        }

        // Mail
        if (empty($_POST["email"]) ) {
            $errorMSG = "Name is required ";
        } else {
            $_POST["email"] = $emailContact;
        }

        // Content
        if (empty($_POST["content"])) {
            $errorMSG = "Name is required ";
        } else {
            $_POST["content"] = $contentContact;
        }


        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $emailContact . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Nom : </b>' . $pseudoContact . '<br>
            <b>Email : </b>' . $emailContact . '<br>
            <b>Message : </b>' . $contentContact . '</p>';

        $return = mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
            if($return) {
                echo "Envoyé avec succès.";
                header('location: Contact');
            } else {
                echo "Problème lors de l'envoi.";
        }
    }
}  // Fin de la classe  
