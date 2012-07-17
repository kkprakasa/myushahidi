<?php
class Testing_Controller extends Template_Controller{
    
    function __construct()
    {
        public $test;
    }
    
    function testing()
    {
        $test = new View('testing');
        $this->template->testing = $test;
       
    }

}
?>