<?php
class Layout
{

    //Recibe los mismos parametros que el View
    function __construct($view, $data = null)
    {
        require("Config.php");

        if (file_exists("./views/$view"))
        {
            //Agregar el encabezado y pie de mi pagina
            if (file_exists("./views/Layout/$header"))require ("./views/Layout/".$header); else die("Header not found.");
            require ("./views/$view");
            if (file_exists("./views/Layout/$footer"))require ("./views/Layout/".$footer); else die("Footer not found.");
        }
        else
        {
            die("Layout not found.");
        }

    }

}