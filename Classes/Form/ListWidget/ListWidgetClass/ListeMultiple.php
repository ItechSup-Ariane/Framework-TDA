<?php
namespace Form\ListWidget\ListWidgetClass;

use Form\ListWidget\ListWidget;

/**
 * Définition de la classe MotDePasse qui permet de créer un Widget de type Liste à choix multiple
 *
 * @author Thomas
 */
class ListeMultiple extends ListWidget
{
    //put your code here
    protected $size;
    
    public function __construct($size)
    {
        $this->size = $size;
    }
    
    public function afficher()
    {
        $result = "<select name='" . $this->name . "' size='" . $this->size . "'> ";
        
        foreach ($this->listElements as $elem){
            $result .= $elem->afficher() ;
        }
        $result .= "</select>";
        return $result;
    }
}
