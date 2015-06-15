<?php


class Fichier {
    //put your code here
    private $taille;
    private $type;
    
    public function __construct($taille,$type)
    {
        $this->taille=$taille;
        $this->type=$type;
    }
    
    public function getTaille()
    {
        return $this->taille;
    }
    
    public function setTaille($taille)
    {
        $this->taille = taille;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setType()
    {
        $this->type = type;
    }
    
    public function afficher()
    {
        echo('<input type="file"  value="">');
    }
}
