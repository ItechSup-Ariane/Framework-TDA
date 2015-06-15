<?php
namespace Form\Widget\WidgetClass\Bouton\BoutonClass;

use Form\Widget\WidgetClass\Bouton\Bouton;

/**
 * Déclaration du bouton de type Submit
 * 
 * Implémentation du type Bouton
 *
 * @author Thomas
 */
class Submit extends Bouton
{
    
    /**
     * Définition du type de bouton
     * 
     * @var type 
     */
    protected $type="submit";
    
    /**
     * Définition de la valeur du bouton
     * 
     * @var type 
     */
    protected  $valeur="Valider";
}
