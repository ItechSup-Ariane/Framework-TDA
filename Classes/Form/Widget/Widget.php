<?php
namespace Form\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Widget
 *
 * @author Thomas
 */
abstract class Widget {
    //put your code here
    //use Framework\Classes\Form;
    
    protected $nom;
    protected $type;
    protected $valeur;
    protected $listeAttributs;
    
    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }
    
    public function getType(){
        return $this->type;
    }
    
    public function setType($type){
        $this->type = $type;
    }
    
    public function getValeur(){
        return $this->valeur;
    }
    
    public function setValeur($valeur){
        $this->valeur = $valeur;
    }
    
    public function getListeAttributs(){
        return $this->listeAttributs;
    }
    
    public function setListeAttributs($listeAttributs){
        $this->listeAttributs = $listeAttributs;
    }
    
    abstract function Afficher();
}
