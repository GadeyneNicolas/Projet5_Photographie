<?php

namespace NGADEYNE\Projet5_Photographie\Model\Entities;
use NGADEYNE\Projet5_Photographie\Model\Model;
use NGADEYNE\Projet5_Photographie\Model\PicturesDAO;

class Pictures {

    private $id;
    private $title;
    private $content;
    private $link;

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
    public function getTitle()
    {
      return $this->title;
    }
    // Setter
    public function setTitle()
    {
      $this->title = $title;
    }

    // Getter
    public function getContent()
    {
      return $this->content;
    }
    // Setter
    public function setContent()
    {
      $this->content = $content;
    }

    // Getter
    public function getLink()
    {
      return $this->link;
    }
    // Setter
    public function setLink()
    {
      $this->link = $link;
    }


} // Fin de la classe