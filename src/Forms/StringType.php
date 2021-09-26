<?php

namespace App\Forms;

use App\Forms\FormBuilder;
require "src\Forms\FormBuilder.php";

/**
 * StringType
 * Create a simple string/text form
 */
class StringType extends FormBuilder
{
    private $form;

    public function __construct(array $param = null)
    {

        $this->form = "<form><input type='text'></input></form>". parent::submitButton($param);
    }

    public function createView()
    {

        echo $this->form;
    }

}

?>