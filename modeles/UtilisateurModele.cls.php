<?php
class UtilisateurModele extends AccesBd
{
    /**
     * 
     */
    public function un($courriel)
    {
        return $this->lireUn("SELECT * FROM utilisateur 
                                WHERE uti_courriel=:email" , ['email'=>$courriel]);
    }

    /* public function tout()
    {
        return $this->lireTout("SELECT * FROM utilisateur");
    } */

    /* public function creer()
    {
        return $this->creer("INSERT INTO utilisateur VALUES (uti_id, uti_courriel, uti_mdp, uti_dcc, uti_confirmation, uti_actif)");
    }

    public function modifier($id)
    {
        return $this->modifier("UPDATE utilisateur SET (uti_id, uti_courriel, uti_mdp, uti_dcc, uti_confirmation, uti_actif) WHERE uti_id = $id");
    }

    public function supprimer($id)
    {
        return $this->supprimer("DELETE FROM utilisateur WHERE uti_id = $id");
    } */
}