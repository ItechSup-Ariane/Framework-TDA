<?php
namespace Form;

/**
 * Définition de l'objet formulaire qui comprendra les widgets le constituant
 *
 * @author Thomas
 */
class Form 
{
    //Liste des widgets ajoutés au formulaire
    private $listeWidget = [];
    
    public function __construct()
    {
        
    }
    
    /**
     * Méthode d'ajout de widget au formulaire
     * 
     * @param type $nom du widget à ajouter
     * @param type $widget à ajouter à la liste
     */
    public function ajouterWidget($nom,$widget)
    {
        $this->listeWidget[$nom] = $widget;
    }
    
    /**
     * Méthode d'affichage de la liste des widgets composant le formualaire
     * 
     * @return $chaineRetour correspondant à la chaîne à afficher pour générer le formulaire
     */
    public function afficher()
    {
        $chaineRetour = '<form METHOD="POST">';
        foreach ($this->listeWidget as $elem) {
            $chaineRetour .= $elem->afficher();
            $chaineRetour .= '<br><br>';
        }
        $chaineRetour .= '</form>';
        return $chaineRetour;
    }
}
