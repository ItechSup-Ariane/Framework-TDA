<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fichier
 *
 * @author Thomas
 */
class Fichier {
    //put your code here
    private $taille;
    private $type;
    
    function __construct($taille,$type) {
        $this->taille=$taille;
        $this->type=$type;
    }
    
    public function getTaille(){
        return $this->taille;
    }
    
    public function setTaille($taille){
        $this->taille = taille;
    }
    
    public function getType(){
        return $this->type;
    }
    
    public function setType(){
        $this->type = type;
    }
    
    public function affichage(){
        echo('<input type="file"  value="">');
    }
}
