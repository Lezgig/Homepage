<?php

namespace App\Interfaces;

/*
* -- ON PROGRESS --
* needs to work out the way <> tags are ordered and the order we want to close them 
* for more flexibility on form control
*/
interface surroundInterface
{
    public static function closingSurround(array $openings);

    public static function getOpeningSurround();
    
}