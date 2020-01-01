<?php 
require_once('template.php');

class DoA extends Template {

    function init($config)
    {
        $this->_config = $config;
    }

    function do(){
        echo "class:{$this->_config['class']} call do\n";
    }
}