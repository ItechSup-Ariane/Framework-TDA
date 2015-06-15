<?php
namespace Form\ListWidget\ListWidgetClass;

use Form\ListWidget\ListWidget;

/**
 * Définition de la classe MotDePasse qui permet de créer un Widget de type Liste à choix unique
 *
 * @author Thomas
 */
class ListeSimple extends ListWidget 
{
    
    public function afficher()
    {
        $result = "<select name='" . $this->name . "'> ";
        
        foreach ($this->listElements as $elem){
            $result .= $elem->afficher() ;
        }
        $result .= "</select>";
        return $result;
    }
}