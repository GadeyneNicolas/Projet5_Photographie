<?php

namespace NGADEYNE\Projet5_Photographie\Model\Entities;
use NGADEYNE\Projet5_Photographie\Model\Entities\Entities;

class PicturesAnimal extends Entities {

    private $id;
    private $title;
    private $content;
    private $link;

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
        $_SESSION['errors']['Title'] = 'Le pseudo doit avoir au moins 3 caractères';
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
        $_SESSION['errors']['Content'] = 'Le pseudo doit avoir au moins 3 caractères';
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