<?php
//Extiende del nucleo Model
class UsersModel extends Model implements IDao {

    public function ReadOne($data)
    {
        // TODO: Implement ReadOne() method.
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "select * from persona";
        //Retornar un array
        $result = $this -> mariadb -> query($query);
        //Retornando el valor
        return $result -> fetchAll();
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function Save($data)
    {
        // TODO: Implement Save() method.
    }

    public function Update($data)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($data)
    {
        // TODO: Implement Delete() method.
    }

}