<?php
namespace Form\Widget;

/** 
 * Définition de la classe abstraite Widget
 * Classe parent des classes de type Widget
 *
 * @author Thomas
 */
abstract class Widget 
{
    
    protected $nom;
    protected $type;
    protected $valeur;
    protected $listeAttributs;
    
    /**
     * Getter de l'attribut nom
     * 
     * @return type
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Setter de l'attribut nom
     * 
     * @param type $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Getter de l'attribut type
     * 
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Setter de l'attribut nom
     * 
     * @param type $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Getter de l'attribut valeur
     * 
     * @return type
     */
    public function getValeur()
    {
        return $this->valeur;
    }
    
    /**
     * Setter de l'attribut valeur
     * 
     * @param type $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }
    
    /**
     * Getter de l'attribut listeAttributs
     * 
     * @return type
     */
    public function getListeAttributs()
    {
        return $this->listeAttributs;
    }
    
    /**
     * Setter de l'attribut listeAttributs
     * 
     * @param type $listeAttributs
     */
    public function setListeAttributs($listeAttributs)
    {
        $this->listeAttributs = $listeAttributs;
    }
    
    /**
     * Méthode abstraite d'affichage qui sera redéfini par chaque implémentation de la classe Widget
     */
    abstract function afficher();
}
