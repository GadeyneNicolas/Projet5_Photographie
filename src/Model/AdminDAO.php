<?php

namespace NGADEYNE\Projet5_Photographie\Model;
use NGADEYNE\Projet5_Photographie\Model\Model;

class AdminDAO extends Model {

    public function connectionAdmin($pseudo, $mdp)
    {
        $sql = 'SELECT AD_PASSWORD FROM T_ADMIN WHERE AD_PSEUDO = :pseudo';
        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
        $hash = $requete->fetch()['AD_PASSWORD'];

        return password_verify($mdp, $hash);
    }

    public function getId($pseudo)
    {
        $sql = 'SELECT AD_ID FROM T_ADMIN WHERE AD_PSEUDO = :pseudo';
        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
    }
} // Fin de la classe