<?php

class Views
{
    //Nombre de la vista y datos
    function __construct($view, $data = null)
    {
        //Si el fichero con el nombre de la vista existe
        if (file_exists("./views/$view"))
        {
            //do this
            require ("./views/$view");
        }
        else
        {
            //por el contrario
            die("View not found.");
        }
    }
}

