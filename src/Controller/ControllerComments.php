<?php

namespace NGADEYNE\Projet5_Photographie\Controller;
use NGADEYNE\Projet5_Photographie\Model\AdminDAO;
use NGADEYNE\Projet5_Photographie\Model\CommentsDAO;
use NGADEYNE\Projet5_Photographie\Model\Entities\Comments;
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
        $comment = new Comments(['pseudo' => $pseudoComment, 'mail' => $emailComment, 'content' => $contentComment]);
        if (empty($_SESSION['errors'])) {
            $results = $this->comments->AddCommentBDD($comment);
            if ($results > 0) {
                $_SESSION['confirmations']['Comments'] = "Votre commentaire a bien été ajouté";
            } else {
                $_SESSION['errors']['BDD'] = "Erreur lors de l'ajout à la base de données";
            }
        }
        header('Location: Application');
        exit();
        
    }

} // Fin de la classe