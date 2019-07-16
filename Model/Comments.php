<?php

require_once 'Model/Model.php';

class Comments extends Model {

    public function getCommentsBDD() {   
        $sql = 'select COMMENT_ID as id,'
                . ' COMMENT_PSEUDO as pseudo, COMMENT_MAIL as email, COMMENT_CONTENT as content from T_COMMENTS'
                . ' order by COMMENT_ID desc';
        $comments = $this->executeRequest($sql);
        return $comments;
    }

    public function DeleteCommentBDD($idComment) {
        $sql = 'DELETE FROM T_COMMENTS WHERE COMMENT_ID = ?';
        $this->executeRequest($sql, array($idComment));
    }

    public function AddCommentBDD($pseudoComment, $emailComment, $contentComment)
    {
        $pseudoComment = htmlspecialchars($pseudoComment);
        $emailComment = htmlspecialchars($emailComment);
        $contentComment = htmlspecialchars($contentComment);
        $sql = 'insert into T_COMMENTS(COMMENT_PSEUDO, COMMENT_MAIL, COMMENT_CONTENT)'
            . 'values(?, ?, ?)';

        $this->executeRequest($sql, array($pseudoComment, $emailComment, $contentComment));
    }
} // Fin de la classe
