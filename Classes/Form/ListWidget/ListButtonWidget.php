<?php
namespace Form\ListWidget;

/**
 * Définition de la classe ListButtonWidget
 * Classe parent des classes de type ListWidget
 *
 * @author Thomas
 */
class ListButtonWidget
{
    //put your code here
    protected $name;
    protected $listElements;
    
    /**
     * Getter de l'attribut name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Setter de l'attribut name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Getter de l'attribut listElement
     */
    public function getListElements()
    {
        return $this->listElements;
    }
    
    /**
     * 
     * @param Element à ajouter
     */
    public function ajouterElement($element)
    {
        $this->listElements[] = $element;
    }
    
    /**
     * Méthode d'affichage de la liste de ButtonWidget
     * 
     * @return $retour contenant la chaîne à afficher
     */
    public function afficher()
    {
        $retour = "";
        foreach ($this->listElements as $elem){
            $retour .= $elem->afficher();
            $retour .= "<br>";
        }
        return $retour;
    }
}
