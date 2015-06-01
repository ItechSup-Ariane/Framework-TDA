<?php
namespace Form\GroupWidget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GroupWidget
 *
 * @author Thomas
 */
class GroupWidget {
    //put your code here
    protected $listeWidget;
    
    public function getListeWidget(){
        return $this->listeWidget;
    }
    
    public function ajouterWidget($widget){
        $this->listeWidget[] = $widget;
    }
    
    public function Afficher(){
        $retour = "";
        foreach ($this->listeWidget as $elem) {
            $retour .= $elem->Afficher();
            $retour .= "<br><br>";
        }
        return $retour;
    }
}
