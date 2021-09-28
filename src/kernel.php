<?php

use App\Controller\Controller;

require "vendor/autoload.php";

if(isset($_SERVER["PATH_INFO"]) == false|| $_SERVER["PATH_INFO"] == null || $_SERVER["PATH_INFO"] == "/"){
    header('Location: /index');
}

new Controller($_SERVER["PATH_INFO"]);


?>