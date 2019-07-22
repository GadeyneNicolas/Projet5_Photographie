<?php

namespace NGADEYNE\Projet5_Photographie\Model;
use NGADEYNE\Projet5_Photographie\Model\Model;
use NGADEYNE\Projet5_Photographie\Model\Entities\Comments;

class CommentsDAO extends Model {

    public function getCommentsBDD() {   
        $arrayComments = [];
        $sql = 'select id,'
                . ' pseudo, mail, content from T_COMMENTS'
                . ' order by id desc';
        $comments = $this->executeRequest($sql);
        foreach ($comments as $comment) {
            $objectComments = new Comments($comment);

            array_push($arrayComments, $objectComments);
        }
        return $arrayComments;
    }

    public function DeleteCommentBDD($idComment) {
        $sql = 'DELETE FROM T_COMMENTS WHERE id = ?';
        $this->executeRequest($sql, array($idComment));
    }

    public function AddCommentBDD($comment)
    {
        $sql = 'insert into T_COMMENTS(pseudo, mail, content)'
            . 'values(?, ?, ?)';

        $results = $this->executeRequest($sql, array($comment->getPseudo(), $comment->getMail(), $comment->getContent()));
        return $results;
    }
} // Fin de la classe
