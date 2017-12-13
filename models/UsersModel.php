<?php

//Extiende del nucleo Model
class UsersModel extends Model
{

    //Obtener contactos
    public function getUsers()
    {
        //Consulta SQL
        $query = "select * from kyf.persona";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll();
    }

//test
}