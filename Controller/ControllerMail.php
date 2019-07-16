<?php

require_once 'View/View.php';

class ControllerMail {
    
    public function mailto($pseudoContact, $emailContact, $contentContact)
    {
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $emailContact . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Nom : </b>' . $pseudoContact . '<br>
            <b>Email : </b>' . $emailContact . '<br>
            <b>Message : </b>' . $contentContact . '</p>';

        $return = mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
            if($return) {
                header('location: Home');
        }
    }
}    
?>