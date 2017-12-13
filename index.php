<?php

//Core
require ("core/Controller.php");
require ("core/Config.php");
require ("core/Views.php");
require ("core/Layout.php");
require ("core/Model.php");
require ("core/LoadModel.php");
require ("core/Functions.php");

//gunifiy.com/index.php?controller=CONTROLLER_NAME&action=METHOD_NAME

//Si se encuentra un controlador
if ($_GET && isset($_GET["controller"]))
{
    //Establecemos el controlador por defecto
    $default_controller = $_GET["controller"];

    //Si el fichero del controlador existe
    if (file_exists("controllers/".$default_controller.".php"))
    {
        //do this
        require ("controllers/".$default_controller.".php");
    }
    else
    {
        //no existe
        die("Controller not found.");
    }
//Por el contrario
}
else
{
    //Si el controlador es el por defecto en Config.php
    //Si el fichero existe
    if (file_exists("controllers/".$default_controller.".php"))
    {
        //do this
        require ("controllers/".$default_controller.".php");
    }
    else
    {
        //No existe y se configura en Core/Config.php
        die("Controller not found.");
    }
}


$Gunify = new $default_controller();

