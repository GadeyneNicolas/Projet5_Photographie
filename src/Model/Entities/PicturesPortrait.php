<?php

namespace NGADEYNE\Projet5_Photographie\Model\Entities;

class PicturesPortrait {

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
    public function setId($id)
    {
        $this->id = $id;
    }

    // Getter
    public function getTitle()
    {
      return htmlspecialchars($this->title);
    }
    // Setter
    public function setTitle($title)
    {
      if(strlen($title) >= 3){
        $this->title = $title;
      } else{
        $_SESSION['errors']['Title'] = 'Le titre doit avoir au moins 3 caractères';
      }
    }

    // Getter
    public function getContent()
    {
      return htmlspecialchars($this->content);
    }
    // Setter
    public function setContent($content)
    {
      if(strlen($content) >= 3){
        $this->content = $content;
      } else{
        $_SESSION['errors']['Content'] = 'Le contenu doit avoir au moins 3 caractères';
      }
    }

    // Getter
    public function getLink()
    {
      return htmlspecialchars($this->link);
    }
    // Setter
    public function setLink($link)
    {
      $this->link = $link;
    }


} // Fin de la classe