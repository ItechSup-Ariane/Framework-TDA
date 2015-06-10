<?php
namespace Form\Widget\WidgetClass\Bouton;
use Form\Widget\Widget;

/**
 * Définition du type Bouton qui hérite de la classe Widget
 *
 * @author Thomas
 */
class Bouton extends Widget{
    //Définition du type de widget
    protected $type="button";
    
    /**
     * Méthode d'affichage des Widgets de type Bouton
     * 
     * @return result correspondant à la chaîne à afficher
     */
    public function afficher(){
        $result = $this->name . "<input type='" . $this->type . "' "
                . $this->listeAttributs . " name='" . $this->name . "value='"
                . $this->valeur . "'>";

        return $result;
    }
}
