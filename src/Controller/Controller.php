<?php

namespace App\Controller;

use App\Services\weather;
use App\Forms\StringType;

class Controller{

    public function __construct()
    {        
        
        echo"<pre>";
        $weather = new weather("Londres");
        var_dump($weather->getClouds());
        $form = new StringType();
        $form->setInput(array("placeholder"=>"type me","class"=>"form-control","type"=>"email"));
        $form->setButton(array("content"=>"Valider"));
        $form->createView();
        echo"</pre>";
    }

}


?>