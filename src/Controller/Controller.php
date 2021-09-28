<?php

namespace App\Controller;

use App\Services\weather;
use App\Forms\StringType;

class Controller{

    public function __construct($path)
    {        
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => 'TMP/twig',
            'debug'=>true
        ]);

        if($path === "/index"){
            
            $form = new StringType();
            $form->setInput(array("placeholder"=>"type me","class"=>"form-control","type"=>"none", "name"=>"location"));
            $form->setButton(array("content"=>"Valider"));
            $form->setForm(array("action"=>"index","method"=>"get"));
            $template = $twig->load('issou.html.twig');

            echo $template->render([
                "form"=>$form->createView()
            ]);

            
        }
    }

}


?>