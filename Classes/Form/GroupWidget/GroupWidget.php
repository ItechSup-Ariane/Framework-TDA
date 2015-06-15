<?php
namespace Form\GroupWidget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Définition de la classe GroupWidget permettant la création d'un groupe de widgets
 *
 * @author Thomas
 */
class GroupWidget 
{
    
    /**
     * Attribut comprenant la liste des widgets composant le groupe
     * 
     * @var type 
     */
    protected $listeWidget;
    
    /**
     * Getter de l'attribut listeWidget
     * 
     * @return type
     */
    public function getListeWidget()
    {
        return $this->listeWidget;
    }
    
    /**
     * Méthode d'ajout de widget à la liste
     * 
     * @param type $widget
     */
    public function ajouterWidget($widget)
    {
        $this->listeWidget[] = $widget;
    }
    
    /**
     * Méthode d'affichage du groupe de widget
     * 
     * @return $retour contenant la chaîne à afficher
     */
    public function afficher()
    {
        $retour = "";
        foreach ($this->listeWidget as $elem) {
            $retour .= $elem->afficher();
            $retour .= "<br><br>";
        }
        return $retour;
    }
}
