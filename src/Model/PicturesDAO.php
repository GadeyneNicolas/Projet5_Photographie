<?php

namespace NGADEYNE\Projet5_Photographie\Model;
use NGADEYNE\Projet5_Photographie\Model\Model;
use NGADEYNE\Projet5_Photographie\Model\Entities\Pictures;

class PicturesDAO extends Model {

    public function addNewPicsBDDPortrait($linkPortrait, $titlePicsPortrait, $contentPicsPortrait)
    {
        $titlePicsPortrait = htmlspecialchars($titlePicsPortrait);
        $sql = 'insert into T_PICTURES_PORTRAIT(PIC_PORTRAIT_LINK, PIC_PORTRAIT_TITLE, PIC_PORTRAIT_CONTENT)'
            . 'values(?, ?, ?)';
        $this->executeRequest($sql, array($linkPortrait, $titlePicsPortrait, $contentPicsPortrait));
    }

    public function getPicsBDDPortrait() {
        $tablePortrait = [];
        $sql = 'select id'
                . ' title, link, content from T_PICTURES_PORTRAIT'
                . ' order by id desc';
        $picturesPortrait = $this->executeRequest($sql);
        foreach ($picturesPortrait as $picturePortrait) {
            $objectPortrait = new Pictures($picturePortrait);

            array_push($tablePortrait, $objectPortrait);
        }
        return $picturesPortrait;
    }

    public function DeletePicsBDDPortrait($idPicsPortrait) {
        $sql = 'DELETE FROM T_PICTURES_PORTRAIT WHERE PIC_PORTRAIT_ID= ?';
        $this->executeRequest($sql, array($idPicsPortrait));
    }

    public function addNewPicsBDDAnimal($linkAnimal, $titlePicsAnimal, $contentPicsAnimal)
    {
        $titlePicsAnimal = htmlspecialchars($titlePicsAnimal);
        $sql = 'insert into T_PICTURES_ANIMAL(PIC_ANIMAL_LINK, PIC_ANIMAL_TITLE, PIC_ANIMAL_CONTENT)'
            . 'values(?, ?, ?)';
        $this->executeRequest($sql, array($linkAnimal, $titlePicsAnimal, $contentPicsAnimal));
    }

    public function getPicsBDDAnimal() {
        
        $sql = 'select PIC_ANIMAL_ID as id,'
                . ' PIC_ANIMAL_TITLE as title, PIC_ANIMAL_LINK as link, PIC_ANIMAL_CONTENT as content from T_PICTURES_ANIMAL'
                . ' order by PIC_ANIMAL_ID desc';
        $picturesAnimal = $this->executeRequest($sql);
        return $picturesAnimal;
    }

    public function DeletePicsBDDAnimal($idPicsAnimal) {
        $sql = 'DELETE FROM T_PICTURES_ANIMAL WHERE PIC_ANIMAL_ID= ?';
        $this->executeRequest($sql, array($idPicsAnimal));
    }

    public function addNewPicsBDDLandscape($linkLandscape, $titlePicsLandscape, $contentPicsLandscape)
    {
        $titlePicsLandscape = htmlspecialchars($titlePicsLandscape);
        $sql = 'insert into T_PICTURES_LANDSCAPE(PIC_LANDSCAPE_LINK, PIC_LANDSCAPE_TITLE, PIC_LANDSCAPE_CONTENT)'
            . 'values(?, ?, ?)';
        $this->executeRequest($sql, array($linkLandscape, $titlePicsLandscape, $contentPicsLandscape));
    }

    public function getPicsBDDLandscape() {
        
        $sql = 'select PIC_LANDSCAPE_ID as id,'
                . ' PIC_LANDSCAPE_TITLE as title, PIC_LANDSCAPE_LINK as link, PIC_LANDSCAPE_CONTENT as content from T_PICTURES_LANDSCAPE'
                . ' order by PIC_LANDSCAPE_ID desc';
        $picturesLandscape = $this->executeRequest($sql);
        return $picturesLandscape;
    }

    public function DeletePicsBDDLandscape($idPicsLandscape) {
        $sql = 'DELETE FROM T_PICTURES_LANDSCAPE WHERE PIC_LANDSCAPE_ID= ?';
        $this->executeRequest($sql, array($idPicsLandscape));
    }
} // Fin de la classe
