<?php

require_once 'Model/Model.php';

class Admin extends Model {

    public function connectionAdmin($pseudo, $mdp)
    {
        $sql = 'SELECT AD_MOTDEPASSE FROM T_ADMIN WHERE AD_PSEUDO = :pseudo';

        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
        $hash = $requete->fetch()['AD_MOTDEPASSE'];

        return password_verify($mdp, $hash);
    }

    public function getId($pseudo)
    {
        $sql = 'SELECT AD_ID FROM T_ADMIN WHERE AD_PSEUDO = :pseudo';
        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
    }
}