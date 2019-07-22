<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Model\AdminDAO;
use NGADEYNE\Projet5_Photographie\Model\CommentsDAO;
use NGADEYNE\Projet5_Photographie\Engine\View;

class ControllerComments {
        private $admin;
        private $comments;

        public function __construct() {
            $this->admin = new AdminDAO();
            $this->comments = new CommentsDAO();
        }
    // Delete Comments
    public function DeleteComments($idComment) {
        if (isset($_SESSION['pseudo']))
        {
        $this->comments->DeleteCommentBDD($idComment);
            header("Location: Admin");
        } else {
            header("Location: Login");
        }
    }
    // Add Comments
    public function AddNewComments($pseudoComment, $emailComment, $contentComment) {
        $this->comments->AddCommentBDD($pseudoComment, $emailComment, $contentComment);
        header("Location: Application");
    }

} // Fin de la classe