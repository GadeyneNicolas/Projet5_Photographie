<?php

require_once 'Model/Model.php';

class Pictures extends Model {

    public function addNewPicsBDD($link, $titlePics, $contentPics)
    {
        $titlePics = htmlspecialchars($titlePics);
        $sql = 'insert into T_PICTURES(PIC_LINK, PIC_TITLE, PIC_CONTENT)'
            . 'values(?, ?, ?)';

        $this->executeRequest($sql, array($link, $titlePics, $contentPics));
    }

    public function getPicsBDD() {
        
        $sql = 'select PIC_ID as id,'
                . ' PIC_TITLE as title, PIC_LINK as picture, PIC_CONTENT as content from T_PICTURES'
                . ' where PIC_ID=?';
        $pictures = $this->executeRequest($sql);
        return $pictures;
    }
}