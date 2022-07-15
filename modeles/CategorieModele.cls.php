<?php
class CategorieModele extends AccesBd
{
    /**
     * 
     */
    public function tout()
    {
        return $this->lireTout("SELECT * FROM categorie ORDER BY cat_id");
    }

    public function ajouter($nom, $type)
    {
        return $this->creer("INSERT INTO categorie VALUES (0, :nom, :type)", ['nom'=>$nom, 'type'=>$type]);
    }
}