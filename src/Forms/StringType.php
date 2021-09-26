<?php

namespace App\Forms;

use App\Forms\FormBuilder;
use Exception;

require "src\Forms\FormBuilder.php";

/**
 * StringType
 * Create a simple string/text form
 */
class StringType extends FormBuilder
{
    private string $form;
    private $button;
    private string $postOrGet;

    public function __construct()
    {

        $this->form = "<form><input type='text'></input></form>";
    }
    
    /**
     * setButton, set your button with an associative array with given keys: 
     * ["value"]
     * ["class"]
     * ["button"]
     *
     * @param  mixed $param
     * @return void
     */
    public function setButton(array $param = null)
    {
             
        $this->button = parent::submitButton($param);
        return $this->button;
    }

    public function setRequest(string $postOrGet)
    {
        if($postOrGet == "post")
        {

            return $this->postOrGet;

        }elseif($postOrGet == "get")
        {
        
            return $this->postOrGet;
            
        }else{

            return throw new Exception('SetRequest method must be either "post" or "get" ');
        }
    }

    public function createView()
    {
        if($this->button == null){
            $this->button = "<button value='submit' class='btn btn-primary' >Send</button>";
        }

        $form = $this->form . $this->button;
        
        echo $form;
    }

}

?>