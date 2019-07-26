<?php

namespace NGADEYNE\Projet5_Photographie\Model\Entities;

class Comments extends Entities {

    private $id;
    private $pseudo;
    private $mail;
    private $content;

    // Getter
    public function getId() {
        return $this->id;
    }
    // Setter
    public function setId($id) {
        $this->id = $id;
    }

    // Getter
    public function getPseudo() {
        return htmlspecialchars($this->pseudo);
    }
    // Setter
    public function setPseudo($pseudo) {
        if(strlen($pseudo) >= 3){
			$this->pseudo = $pseudo;
		} else{
			$_SESSION['errors']['Pseudo'] = 'Le pseudo doit avoir au moins 3 caractères';
		}
    }

    // Getter
    public function getMail() {
      return htmlspecialchars($this->mail);
    }
    // Setter
    public function setMail($mail) {
	    if(strlen($mail) >= 10){
		    $filtredMail = filter_var($mail, FILTER_VALIDATE_EMAIL);
		    if($filtredMail != false){
			    $this->mail = $filtredMail;
		    }else{
			    $_SESSION['errors']['Email'] = 'L\'adresse mail doit être au bon format et contenir plus de 10 caracètres.';
		    }
	    }
    }

    // Getter
    public function getContent() {
        return htmlspecialchars($this->content);
    }

    // Setter
    public function setContent($content) {
        if(strlen($content) >= 8){
            $this->content = $content;
        } else{
            $_SESSION['errors']['Content'] = 'Le commentaire doit avoir au moins 8 caractères';
        }
    }
} // Fin de la classe