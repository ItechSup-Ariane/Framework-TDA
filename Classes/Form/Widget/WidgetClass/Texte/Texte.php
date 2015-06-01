<?php
namespace Form\Widget\WidgetClass\Texte;
use Form\Widget\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of texte
 *
 * @author Thomas
 */
//include 'template.php';

class Texte extends Widget{
    //put your code here
    
    protected $type="text";

    public function Afficher(){
        $result = $this->nom . "<input type='" . $this->type . "' "
                . $this->listeAttributs . " value='"
                . $this->valeur . "'>";

        return $result;
    }
    
}
