<?php

//Esta es una forma de ahorrar código, de vez de poner require(blah blah),
//puedo llamar a mi LoadModel($model) y así lograr el require de forma más rápida.
class LoadModel
{

    function __construct($model)
    {
        //Si el fichero de modelo existe
        if(file_exists("./models/$model.php")){
            //incluir nombre del archivo
            require ("./models/$model.php");
        }else {
            //no existe
            die("Model #$model# not found.");
        }
    }

}