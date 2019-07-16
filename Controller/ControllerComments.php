<?php

require_once 'Model/Admin.php';
require_once 'Model/Comments.php';
require_once 'View/View.php';

class ControllerComments {
        private $admin;
        private $comments;

        public function __construct() {
            $this->admin = new Admin();
            $this->comments = new Comments();
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