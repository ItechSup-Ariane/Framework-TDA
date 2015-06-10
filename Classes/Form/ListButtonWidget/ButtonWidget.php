<?php
namespace Form\ListButtonWidget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ButtonWidget
 *
 * @author Thomas
 */
class ButtonWidget {
    //put your code here
    protected $type;
    protected $name;
    protected $value;
    protected $texte;
    
    public function __construct($type, $name, $value, $texte) {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->texte = $texte;
    }
    
    public function afficher(){
        $result = "<input type='" . $this->type . "' name='" . $this->name . "' value='" . $this->value . "'> ";
        $result .= $this->texte;
        return $result;
    }
}
