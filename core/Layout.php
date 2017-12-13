<?php
class Layout
{

    //Recibe los mismos parametros que el View
    function __construct($view, $data = null)
    {
        require("Config.php");

        //Agregar el encabezado y pie de mi pagina
        if (file_exists("./views/$view"))
        {
            require ("./views/$view");
            if (file_exists("./views/Layout/$header"))require ("./views/Layout/".$header); else die("Header not found.");
            if (file_exists("./views/Layout/$footer"))require ("./views/Layout/".$footer); else die("Footer not found.");
        }
        else
        {
            die("Layout not found.");
        }

    }

}