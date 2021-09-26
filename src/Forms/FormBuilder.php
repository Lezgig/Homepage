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

        if(array_map('is_null',$props)){
        
            if(isset($props["value"]) == false)
            {
                
                $props["value"] = "submit";

            }if(isset($props["content"]) == false){
                
                $props["content"] = "Send";

            }if(isset($props["class"]) == false ){

                $props["class"] = "btn btn-primary";

            }

        }
     
        $Button = "<button value={$props['value']} class='{$props['class']}'>{$props['content']}</button>";
        
        return $Button;
    }

    private function is_null($table)
    {
        if($table == null){
            return $table;
        }
    }

}

?>