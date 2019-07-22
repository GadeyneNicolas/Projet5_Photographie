<?php

namespace NGADEYNE\Projet5_Photographie\Model;
use NGADEYNE\Projet5_Photographie\Model\Model;
use NGADEYNE\Projet5_Photographie\Model\Entities\PicturesPortrait;
use NGADEYNE\Projet5_Photographie\Model\Entities\PicturesAnimal;
use NGADEYNE\Projet5_Photographie\Model\Entities\PicturesLandscape;

class PicturesDAO extends Model {

    public function addNewPicsBDDPortrait($picture)
    {
        $sql = 'insert into T_PICTURES_PORTRAIT(link, title, content)'
            . 'values(?, ?, ?)';
        $results = $this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function getPicsBDDPortrait() {
        $arrayPortrait = [];
        $sql = 'select id,'
        . ' title, link, content from T_PICTURES_PORTRAIT'
        . ' order by id desc';
        $picturesPortrait = $this->executeRequest($sql);
        foreach ($picturesPortrait as $picturePortrait) {
            $objectPortrait = new PicturesPortrait($picturePortrait);

            array_push($arrayPortrait, $objectPortrait);
        }
        return $arrayPortrait;
    }

    public function DeletePicsBDDPortrait($idPicsPortrait) {
        $sql = 'DELETE FROM T_PICTURES_PORTRAIT WHERE id= ?';
        $this->executeRequest($sql, array($idPicsPortrait));
    }

    public function addNewPicsBDDAnimal($picture)
    {
        $sql = 'insert into T_PICTURES_ANIMAL(link, title, content)'
            . 'values(?, ?, ?)';
        $results = $this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function getPicsBDDAnimal() {
        $arrayAnimal = [];
        $sql = 'select id,'
        . ' title, link, content from T_PICTURES_ANIMAL'
        . ' order by id desc';
        $picturesAnimal = $this->executeRequest($sql);
        foreach ($picturesAnimal as $pictureAnimal) {
            $objectAnimal = new PicturesAnimal($pictureAnimal);

            array_push($arrayAnimal, $objectAnimal);
        }
        return $arrayAnimal;
    }

    public function DeletePicsBDDAnimal($idPicsAnimal) {
        $sql = 'DELETE FROM T_PICTURES_ANIMAL WHERE id= ?';
        $this->executeRequest($sql, array($idPicsAnimal));
    }

    public function addNewPicsBDDLandscape($picture)
    {
        $sql = 'insert into T_PICTURES_LANDSCAPE(link, title, content)'
            . 'values(?, ?, ?)';
        $results = $this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function getPicsBDDLandscape() {
        $arrayLandscape = [];
        $sql = 'select id,'
                . ' title, link, content from T_PICTURES_LANDSCAPE'
                . ' order by id desc';
        $picturesLandscape = $this->executeRequest($sql);
        foreach ($picturesLandscape as $pictureLandscape) {
            $objectLandscape = new PicturesLandscape($pictureLandscape);

            array_push($arrayLandscape, $objectLandscape);
        }
        return $arrayLandscape;
    }

    public function DeletePicsBDDLandscape($idPicsLandscape) {
        $sql = 'DELETE FROM T_PICTURES_LANDSCAPE WHERE id= ?';
        $this->executeRequest($sql, array($idPicsLandscape));
    }
} // Fin de la classe
