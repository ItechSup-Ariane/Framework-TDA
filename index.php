<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Loader de classes
        spl_autoload_register(function($className){
            // project-specific namespace prefix
            $prefix = 'Form\\';
            
            // base directory for the namespace prefix
            $base_dir = __DIR__ . '/Classes/Form/';
            
            // does the class use the namespace prefix?
            $len = strlen($prefix);
            if (strncmp($prefix, $className, $len) !== 0) {
                // no, move to the next registered autoloader
                return;
            }
            
            // get the relative class name
            $relative_class = substr($className, $len);
            
            // replace the namespace prefix with the base directory, replace namespace
            // separators with directory separators in the relative class name, append
            // with .php
            $file = $base_dir . str_replace('\\', DIRECTORY_SEPARATOR , $relative_class) . '.php';
            
            // if the file exists, require it
            if (file_exists($file)) {
                require $file;
            }
        });
        
        // Différents objets utiliser (pour tests)
        use Form\Widget\WidgetClass\Texte\Texte;
        use Form\Widget\WidgetClass\Texte\TexteClass\Date;
        use Form\Widget\WidgetClass\Texte\TexteClass\Mail;
        use Form\Widget\WidgetClass\Texte\TexteClass\Entier;
        use Form\Widget\WidgetClass\Texte\TexteClass\MotDePasse;
        use Form\Widget\WidgetClass\Bouton\Bouton;
        use Form\Widget\WidgetClass\Bouton\BoutonClass\Submit;
        use Form\ListWidget\ListElement;
        use Form\ListWidget\ListWidgetClass\ListeSimple;
        use Form\ListWidget\ListWidgetClass\ListeMultiple;
        use Form\ListWidget\ListButtonWidgetClass\Checkbox;
        use Form\ListWidget\ListButtonWidgetClass\RadioButton;
        use Form\ListWidget\ListButtonWidget; 
        use Form\GroupWidget\GroupWidgetClass\Adresse;
        use Form\Form;
        
        $test = new Form();
        
//        $texte = new Texte();        
//        $date = new Date();
//        $email = new Mail();
//        $entier = new Entier();
//        $password = new MotDePasse();
//        $bouton = new Bouton();
//        $submit = new Submit();
//        $adresse = new Adresse();

//        $elem1 = new ListElement("elem1","pour voir 1");
//        $elem2 = new ListElement("elem2","pour voir 2");
//        $elem3 = new ListElement("elem3","pour voir 3");
//        $liste = new ListeSimple();
//        $liste->ajouterElement($elem1);
//        $liste->ajouterElement($elem2);
//        $liste->ajouterElement($elem3);
        
//        $elem1 = new ListElement("elem1","pour voir 1");
//        $elem2 = new ListElement("elem2","pour voir 2");
//        $elem3 = new ListElement("elem3","pour voir 3");
//        $liste = new ListeMultiple(2);
//        $liste->ajouterElement($elem1);
//        $liste->ajouterElement($elem2);
//        $liste->ajouterElement($elem3);
//        $check = new ButtonWidget("radio", "nom", "test", "pour voir");
//        $check = new Checkbox("nom", "test", "pour voir");
//        $radio = new RadioButton("nom", "test", "pour voir");
//        $check1 = new Checkbox("nom", "test", "texte1");
//        $check2 = new Checkbox("nom", "test", "texte2");
//        $check3 = new Checkbox("nom", "test", "texte3");
        
        $radio1 = new RadioButton("nom", "test", "texte1");
        $radio2 = new RadioButton("nom", "test", "texte2");
        $radio3 = new RadioButton("nom", "test", "texte3");
        
        $liste = new ListButtonWidget();
        $liste->ajouterElement($radio1);
        $liste->ajouterElement($radio2);
        $liste->ajouterElement($radio3);
//        $liste->ajouterElement($check1);
//        $liste->ajouterElement($check2);
//        $liste->ajouterElement($check3);
        
//        $test->ajouterWidget("texte",$texte);
//        $test->ajouterWidget("date",$date);
//        $test->ajouterWidget("email", $email);
//        $test->ajouterWidget("entier", $entier);
//        $test->ajouterWidget("password", $password);
//        $test->ajouterWidget("bouton",$bouton);
//        $test->ajouterWidget("submit", $submit);
//        $test->ajouterWidget("adresse", $adresse);
//        $test->ajouterWidget("check", $check);
//        $test->ajouterWidget("radio", $radio);
        $test->ajouterWidget("liste", $liste);
        
        echo $test->Afficher();
        
        //echo 'test';
        ?>
    </body>
</html>
