<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:00
 */

class schemaSede {

    public $Codigo;
    public $Nombre;
    public $Telefono;
    public $Calle;
    public $Numero;
    public $Comuna;
    public $Ciudad;

    function __construct($codigo, $nombre, $telefono, $calle, $numero, $comuna, $ciudad){
        $this->Codigo = $codigo;
        $this->Nombre = $nombre;
        $this->Telefono = $telefono;
        $this->Calle = $calle;
        $this->Numero = $numero;
        $this->Comuna = $comuna;
        $this->Ciudad = $ciudad;
    }

}

class SedeModel extends Model implements IDao {

    public function ReadOne($data)
    {
        $query = 'SELECT * FROM sede WHERE CODIGO = '.$data->Codigo;
        $command = $this->mariadb->query($query);
        $result = $command->fetch();
        return $result;
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "SELECT * FROM sede";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll(); // array
    }

    public function getId()
    {
        try{
            $query = "SELECT MAX(CODIGO) AS id FROM sede";
            $command = $this->mariadb->prepare($query);
            $command->execute();
            $id = $command->fetch()['id'];
            return isset($id) && $id > 0 ? $id + 1 : 1;
        }catch(Exception $e){ return 1; }
    }

    public function Save($data)
    {
        try{
            $data->Codigo = $this->getId();
            $query = 'INSERT INTO sede (CODIGO, NOMBRE, TELEFONO, CALLE, NUMERO, COMUNA, CIUDAD) VALUES (:CODIGO, :NOMBRE, :TELEFONO, :CALLE, :NUMERO, :COMUNA, :CIUDAD)';
            $command = $this->mariadb->prepare($query);
            $command->bindParam(':CODIGO',$data->Codigo);
            $command->bindParam(':NOMBRE',$data->Nombre);
            $command->bindParam(':TELEFONO',$data->Telefono);
            $command->bindParam(':CALLE',$data->Calle);
            $command->bindParam(':NUMERO',$data->Numero);
            $command->bindParam(':COMUNA',$data->Comuna);
            $command->bindParam(':CIUDAD',$data->Ciudad);
            return $command->execute(); //bool
        }catch(Exception $e){
            die('Error al intentar guardar registro: '.$e->getMessage());
        }
    }

    public function Update($data)
    {
        $query = 'UPDATE sede SET NOMBRE = :NOMBRE, TELEFONO = :TELEFONO, CALLE = :CALLE, NUMERO = :NUMERO, COMUNA = :COMUNA, CIUDAD = :CIUDAD WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$data->Codigo);
        $command->bindParam(':NOMBRE',$data->Nombre);
        $command->bindParam(':TELEFONO',$data->Telefono);
        $command->bindParam(':CALLE',$data->Calle);
        $command->bindParam(':NUMERO',$data->Numero);
        $command->bindParam(':COMUNA',$data->Comuna);
        $command->bindParam(':CIUDAD',$data->Ciudad);
        return $command->execute(); //bool
    }

    public function Delete($data)
    {
        $query = 'DELETE FROM sede WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$data->Codigo);
        return $command->execute(); //bool
    }

}