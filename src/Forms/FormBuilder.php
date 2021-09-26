<?php

namespace App\Forms;

use App\Interfaces\surroundInterface;
use Exception;

/**
 * FormBuilder
 */
abstract class FormBuilder implements surroundInterface
{
    
    /**
     * submitButton
     * Create Submit button
     * 
     * @param  mixed $props
     * @return void
     */
    protected static function submitButton(array $props = null){
   
        if($props == null){
            $keys = array("value","content","class");
            $props = array_fill_keys($keys, null);    
        }

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
     
        $button = "<button value={$props['value']} class='{$props['class']}'>{$props['content']}</button>";
        
        return $button;
    }
    
    /**
     * stringInput
     *
     * @param  mixed $props
     * @return void
     */
    protected static function stringInput(array $props = null){

        if(array_map('is_null',$props)){
        
            if(isset($props["class"]) == false)
            {
                
                $props["class"] = "form-control";

            }if(isset($props["placeholder"]) == false){
                
                $props["placeholder"] = "Your text here";

            }if(isset($props["type"]) == false ){

                $props["type"] = "email";

            }

        }
     
        $input = "<input type={$props['type']} class='{$props['class']}' placeholder='{$props['placeholder']}'></input>";
        
        return $input;
    }
    
    /**
     * request
     *
     * @param  mixed $form
     * @return void
     */
    protected static function request(array $form = null){

        if(isset($form["method"]) & $form["method"] == "post" || $form["method"] == "get")
        {

            $post_Or_Get = $form["method"];

        }elseif(isset($form["method"]) == false ){

            return throw new Exception('SetRequest["method"] must be either "post" or "get" ');

        }elseif($form["method"] != "post" || $form["method"] != "get"){

            return throw new Exception('SetRequest["method"] must be either "post" or "get" ' . $form["method"] . "choosen");
            
        }

        if(isset($form["action"]))
        {

            $action = $form["action"];

        }elseif(isset($form["action"]) == false){

            return throw new Exception('request["action"] must be set');
        }

        return "<form method={$form['method']} class={$form['class']} action={$form['action']}>";

    }

    private function is_null($table)
    {
        if($table == null){
            return $table;
        }
    }

    public static function closingSurround(array $openings) :string
    {
        $closing_Tags = implode($openings);

        return $closing_Tags;
    }

    public static function getOpeningSurround()
    {


    }

}

?>