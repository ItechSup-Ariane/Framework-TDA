<?php
namespace Form\Widget\WidgetClass\Bouton;
use Form\Widget\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bouton
 *
 * @author Thomas
 */
class Bouton extends Widget{
    //put your code here
    protected $type="button";

    
    //<button name="button">Click me</button>
    
    public function Afficher(){
        $result = $this->name . "<input type='" . $this->type . "' "
                . $this->listeAttributs . " name='" . $this->name . "value='"
                . $this->valeur . "'>";

        return $result;
    }
}
