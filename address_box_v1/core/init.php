<?php
    //Include Config
    require_once "../config/config.php";

    //Include Helper Files
    require_once "../helpers/system_helper.php";


    //Autoload
    function __autoload($class_name){

        require_once ("../libs/" . $class_name . ".php");

    }