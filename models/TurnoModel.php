<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:00
 */

class TurnoModel extends Model implements ModelCRUD {

    public function ReadOne($data)
    {
        // TODO: Implement ReadOne() method.
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "select * from turno";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll();
    }

    public function Save($data)
    {
        // TODO: Implement Save() method.
    }

    public function Update($id, $data)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($id)
    {
        // TODO: Implement Delete() method.
    }
}