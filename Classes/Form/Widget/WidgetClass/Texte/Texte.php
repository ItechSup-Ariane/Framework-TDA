<?php
namespace Form\Widget\WidgetClass\Texte;
use Form\Widget\Widget;

/**
 * Définition de la classe Texte qui est la classe parent de l'ensemble des widgets de type texte
 *
 * @author Thomas
 */

class Texte extends Widget{
    // Définition du type de widget
    protected $type="text";

    /**
     * Implémentation de la méthode d'affichage de la classe Widget (classe parent)
     * 
     * @return $result qui contiendra la chaîne à afficher
     */
    public function afficher(){
        $result = $this->nom . "<input type='" . $this->type . "' "
                . $this->listeAttributs . " value='"
                . $this->valeur . "'>";

        return $result;
    }
    
}
