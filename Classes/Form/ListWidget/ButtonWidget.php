<?php
namespace Form\ListWidget;

/**
 * Définition de la classe abstraite ButtontWidget
 * Classe parent des classes de type ButtonWidget
 *
 * @author Thomas
 */
abstract class ButtonWidget 
{
    //put your code here
    /**
     * @var type 
     */
    protected $type;
    /**
     *
     * @var type 
     */
    protected $name;
    /**
     *
     * @var type 
     */
    protected $value;
    /**
     *
     * @var type 
     */
    protected $texte;
    
    /**
     * Implémentation de la méthode d'affichage de la classe ButtonWidget
     * 
     * @return $result qui contiendra la chaîne à afficher
     */
    public function afficher()
    {
        $result = "<input type='" . $this->type . "' name='" . $this->name . "' value='" . $this->value . "'> ";
        $result .= $this->texte;
        return $result;
    }
}
