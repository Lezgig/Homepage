<?php

namespace App\Forms;

/**
 * FormBuilder
 */
abstract class FormBuilder
{
    
    /**
     * submitButton
     * Create Submit button
     * 
     * @param  mixed $props
     * @return void
     */
    protected static function submitButton(array $props = null){

        if($props == null)
        {
            return "<button value='submit' class='btn btn-primary' >Valider</button>" ; 
        }
     
        $Button = "<button value={$props['value']} class='{$props['class']}'>{$props['content']}</button>";

        return $Button;
    }

}

?>