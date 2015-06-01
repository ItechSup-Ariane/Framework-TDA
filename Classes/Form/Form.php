<?php
namespace Form;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form
 *
 * @author Thomas
 */
class Form {
    //put your code here
    private $listeWidget = [];
    
    public function __construct() {
        
    }
    
    public function ajouterWidget($nom,$widget){
        $this->listeWidget[$nom] = $widget;
        //$this->listeWidget=array($nom => $widget);
        //$this->listeWidget[]=array($nom => $widget->affichage()); 
    }
    
    // todo : créer une méthode pour modifier la liste des widgets sous la forme 'key'='value'
    public function Afficher(){
        $chaineRetour = '<form METHOD="POST">';
        foreach ($this->listeWidget as $elem) {
            $chaineRetour .= $elem->Afficher();
            $chaineRetour .= '<br><br>';
        }
        $chaineRetour .= '</form>';
        return $chaineRetour;
    }
        //$nouvelleListeWidget = $this->modifListe($this->listeWidget);
        //return $nouvelleListeWidget;
    //}
    
//    public function modifListe($listeWidget){
//        $liste = array();
//        foreach ($listeWidget as $elem){
//            $liste=array($nom => $elem->affichage());
//        }
//        return $liste;
//    }
}
