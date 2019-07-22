<?php

namespace NGADEYNE\Projet5_Photographie\Entities;

class Admin {

    private $id;
    private $pseudo;
    private $password;
   
    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);     
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

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
      return htmlspecialchars($this->pseudo);
    }
    // Setter
    public function setPseudo()
    {
        $this->pseudo = $pseudo;
    }

    // Getter
    public function getPassword()
    {
      return htmlspecialchars($this->password);
    }
    // Setter
    public function setPassword()
    {
      $this->password = $password;
    }

} // Fin de la classe