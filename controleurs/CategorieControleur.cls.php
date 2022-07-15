<?php
class CategorieControleur extends Controleur
{
    public function __construct($modele, $module, $action)
    {
        parent::__construct($modele, $module, $action);
        if(!isset($_SESSION['utilisateur'])) {
            Utilitaire::nouvelleRoute('utilisateur/index');
        }
    }

    /**
     * Méthode invoquée par défaut si aucune action n'est indiquée
     */
    public function index($params)
    {
        $this->gabarit->affecterActionParDefaut('tout');
        $this->tout($params);
    }
    
    public function tout()
    {
        $categories = $this->modele->tout();
        $this->gabarit->affecter('categories', $categories);
        $titre = 'categorie'; 
        $this->gabarit->affecter('titre',$titre);
    }

    public function ajouter() {

        $this->modele->ajouter($_POST['cat_nom'], $_POST['cat_type']);
        $this->gabarit->affecterActionParDefaut('tout');
        Utilitaire::nouvelleRoute('categorie/tout');
    }
}
