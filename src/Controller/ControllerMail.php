<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerMail {

    public function mailto($pseudoContact, $emailContact, $contentContact)
    {
        if(strlen($emailContact) >= 10){
            filter_var($mail, FILTER_VALIDATE_EMAIL);
            $emailContact;
		} else {
            echo "Il y a une erreur dans votre adresse mail, veuillez réessayer s'il vous plait.";
        }

        if(strlen($pseudoContact) >= 3){
            $pseudoContact;
		} else {
            echo "Il y a une erreur dans votre pseudo, veuillez réessayer s'il vous plait.";
        }

        if(strlen($contentContact) >= 15){
            $contentContact;
		} else {
            echo "Il y a une erreur dans votre message, veuillez réessayer s'il vous plait.";
        }

        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $emailContact . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de photographie.nicolas-gadeyne.fr</h1>
            <p><b>Nom : </b>' . $pseudoContact . '<br>
            <b>Email : </b>' . $emailContact . '<br>
            <b>Message : </b>' . $contentContact . '</p>';

        $return = mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
            if($return) {
                echo "Votre message a bien été envoyé. Votre pseudo : ". $pseudoContact . " Votre adresse mail : " . $emailContact . " Votre message : " . $contentContact;
               // header('location: Contact');
            } else {
                echo "Il y a une erreur, veuillez réessayer s'il vous plait.";
        }
    }
}  // Fin de la classe