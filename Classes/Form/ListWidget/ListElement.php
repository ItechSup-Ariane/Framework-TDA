<?php
namespace Form\ListWidget;

/**
 * Classe permettant la création d'éléments pour les listes
 *
 * @author Thomas
 */
class ListElement {
    //put your code here
    protected $nom;
    protected $valeur;
    
    /**
     * Constructeur permettant la créatio de l'objet ListElement
     * 
     * @param type $nom
     * @param type $valeur
     */
    public function __construct($nom, $valeur) {
        $this->nom = $nom;
        $this->valeur = $valeur;
    }
    
    /**
     * Méthode d'affichage d'un objet de type ListElement
     * 
     * @return La chaîne à afficher
     */
    public function afficher(){
        return "<option value='" . $this->nom . "'> " . $this->valeur;
    }
}
