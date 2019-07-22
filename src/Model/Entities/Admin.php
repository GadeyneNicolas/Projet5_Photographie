<?php

namespace NGADEYNE\Projet5_Photographie\Entities;
use NGADEYNE\Projet5_Photographie\Model\Model;
use NGADEYNE\Projet5_Photographie\Model\AdminDAO;

class Admin {

    private $id;
    private $pseudo;
    private $password;

    // Getter
    public function getId()
    {
      return $this->id;
    }
    // Setter
    public function setId()
    {
      $this->id = $id;
    }

    // Getter
    public function getPseudo()
    {
      return $this->pseudo;
    }
    // Setter
    public function setPseudo()
    {
     $this->pseudo = $pseudo;
    }

    // Getter
    public function getPassword()
    {
      return $this->password;
    }
    // Setter
    public function setPassword()
    {
      $this->password = $password;
    }

} // Fin de la classe