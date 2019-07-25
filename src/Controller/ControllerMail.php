<?php

namespace NGADEYNE\Projet5_Photographie\Controller;

class ControllerMail {

    public function mailto($pseudoContact, $emailContact, $contentContact)
    {
    	$error = false; 
        if(strlen($emailContact) >= 10){
            $mail = filter_var($emailContact, FILTER_VALIDATE_EMAIL);
            if(!$mail){
            	$error = true;
	            echo "Il y a une erreur dans votre adresse mail, veuillez réessayer s'il vous plait.";
            }
		} else {
        	$error = true;
            echo "Il y a une erreur dans votre adresse mail, veuillez réessayer s'il vous plait.";
        }

        if(strlen($pseudoContact) < 3){
            $error = true; 
            echo "Il y a une erreur dans votre pseudo, veuillez réessayer s'il vous plait.";
        }

        if(strlen($contentContact) < 15){
	        echo "Il y a une erreur dans votre message, veuillez réessayer s'il vous plait.";
	        $error = true;
        } 
        
		if(!$error){
			$header  = 'MIME-Version: 1.0' . "\r\n";
			$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header .= 'From: ' . $emailContact . "\r\n";

			$message = '<h1>Message envoyé depuis la page Contact de photographie.nicolas-gadeyne.fr</h1>
            <p><b>Nom : </b>' . $pseudoContact . '<br>
            <b>Email : </b>' . $emailContact . '<br>
            <b>Message : </b>' . $contentContact . '</p>';

			$return = mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
			if($return) {
				echo "Votre message a bien été envoyé. Votre pseudo : ". $pseudoContact . " Votre adresse mail : " . $mail . " Votre message : " . $contentContact;
				// header('location: Contact');
			} else {
				echo "Il y a une erreur, veuillez réessayer s'il vous plait.";
			}
		}
    }
}  // Fin de la classe