<?php
namespace Form\GroupWidget\GroupWidgetClass;

use Form\GroupWidget\GroupWidget;
use Form\Widget\WidgetClass\Texte\Texte;

/**
 * Implémentation de la classe GroupWidget permettant la création d'un objet de type Adresse
 *
 * @author Thomas
 */
class Adresse extends GroupWidget
{
    
    /**
     * Constructeur permettant de créer l'objet Adresse avec les champs qui le constitue
     */
    public function __construct()
    {
        $adresse1 = new Texte();
        $adresse2 = new Texte();
        $codePostal = new Texte();
        $ville = new Texte();
        
        $this->listeWidget[] = $adresse1;
        $this->listeWidget[] = $adresse2;
        $this->listeWidget[] = $codePostal;
        $this->listeWidget[] = $ville;
    }
}
