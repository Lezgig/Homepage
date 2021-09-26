<?php

namespace App\Forms;

use App\Forms\FormBuilder;
use App\Interfaces\surroundInterface;

require "src\Forms\FormBuilder.php";

/**
 * StringType
 * Create a simple string/text form
 */
class StringType extends FormBuilder implements surroundInterface
{
    private string $form;
    private $input;
    private $button;
    private string $post_Or_Get;
    private string $closing_Surround;

    public function __construct()
    {
        $this->form = "<form method='get' action='none'>";
        $this->input = "<input type='text'>";
        $this->button = "<button value='submit' class='btn btn-primary' >Send</button>";
    }
    
    /**
     * Set your button with an associative array with given keys: 
     * ["value"]
     * ["class"]
     * ["content"]
     *
     * @param  mixed $param
     * @return void
     */
    public function setButton(array $param = null)
    {
             
        $this->button = parent::submitButton($param);
        return $this->button;
    }
    
    /**
     * Set your button with an associative array with given keys: 
     *["class"] 
     *["placeholder"]
     *["type"]
     * @param  mixed $param
     * @return void
     */
    public function setInput(array $param = null)
    {
             
        $this->input = parent::stringInput($param);
        return $this->input;
    }
    
    /**
     * setRequest
     *
     * @param  mixed $form
     * @return void
     */
    public function setForm(array $form)
    {
       
        $this->input = parent::stringInput($form);
        return $this->input;
    }
    
    /**
     * createView
     *
     * @return void
     */
    public function createView()
    {

        $form = $this->form . $this->input . $this->button . "</form>";
        
        echo $form;
    }

    

}

?>