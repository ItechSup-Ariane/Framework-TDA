<?php
namespace Form\GroupWidget\GroupWidgetClass;
use Form\GroupWidget\GroupWidget;
use Form\Widget\WidgetClass\Texte\Texte;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adresse
 *
 * @author Thomas
 */
class Adresse extends GroupWidget{
    //put your code here
    public function __construct() {
        $adresse1 = new Texte();
        $adresse2 = new Texte();
        $codePostal = new Texte();
        $ville = new Texte();
        
        $this->listeWidget[] = $adresse1;
        $this->listeWidget[] = $adresse2;
        $this->listeWidget[] = $codePostal;
        $this->listeWidget[] = $ville;
    }
}
