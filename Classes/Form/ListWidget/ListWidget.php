<?php
namespace Form\ListWidget;

/**
 * Définition de la classe abstraite ListWidget
 * Classe parent des classes de type ListWidget
 *
 * @author Thomas
 */
abstract class ListWidget 
{
    //put your code here
    protected $name;
    protected $listElements;
    
    /**
     * Getter de l'attribut name
     * 
     * @return type
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Setter de l'attribut name
     * 
     * @param type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Getter de l'attribut listElements
     * 
     * @return type
     */
    public function getListElements()
    {
        return $this->listElements;
    }
    
    /**
     * Méthode d'ajout d'élément à la liste
     * 
     * @param type $element
     */
    public function ajouterElement($element)
    {
        $this->listElements[] = $element;
    }
    
    /**
     * Méthode abstraite d'affichage qui sera redéfini par chaque implémentation de la classe ListWidget
     */
    public abstract function afficher();
}
