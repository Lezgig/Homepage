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
        $form->setButton(array("content"=>"Configurer"));
        $form->createView();
        echo"</pre>";
    }

}


?>