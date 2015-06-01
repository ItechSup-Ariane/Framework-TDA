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
        // put your code here
        //include 'Classes\Form\Widget\WidgetClass\Texte\Texte.php';
        //use Framework\Classes\Form\Widget\WidgetClass\Texte\Texte;
              
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
        
        use Form\Widget\WidgetClass\Texte\Texte;
        use Form\Widget\WidgetClass\Texte\TexteClass\Date;
        use Form\Widget\WidgetClass\Texte\TexteClass\Mail;
        use Form\Widget\WidgetClass\Texte\TexteClass\Entier;
        use Form\Widget\WidgetClass\Texte\TexteClass\MotDePasse;
        use Form\Widget\WidgetClass\Bouton\Bouton;
        use Form\Widget\WidgetClass\Bouton\BoutonClass\Submit;
        
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
        $adresse = new Adresse();
        
//        $test->ajouterWidget("texte",$texte);
//        $test->ajouterWidget("date",$date);
//        $test->ajouterWidget("email", $email);
//        $test->ajouterWidget("entier", $entier);
//        $test->ajouterWidget("password", $password);
//        $test->ajouterWidget("bouton",$bouton);
//        $test->ajouterWidget("submit", $submit);
        $test->ajouterWidget("adresse", $adresse);
        
        echo $test->Afficher();
        
        //echo 'test';
        ?>
    </body>
</html>
