<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:00
 */

class schemaEmpresa {

    public $Rut;
    public $Nombre;
    public $RazonSocial;

    function __construct($rut, $nombre, $razonSocial){
        $this->Rut = $rut;
        $this->Nombre = $nombre;
        $this->RazonSocial = $razonSocial;
    }

}

class EmpresaModel extends Model implements IDao {

    public function ReadOne($data)
    {
        $query = 'SELECT * FROM empresa WHERE RUT = "'.$data->Rut.'"';
        $command = $this->mariadb->query($query);
        $result = $command->fetch();
        return $result;
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "SELECT * FROM empresa";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll(); // array
    }

    public function getId()
    {

    }

    public function Save($data)
    {
        try{
            $data->Codigo = $this->getId();
            $query = 'INSERT INTO empresa (RUT, NOMBRE, RAZON_SOCIAL) VALUES (:RUT, :NOMBRE, :RAZON_SOCIAL)';
            $command = $this->mariadb->prepare($query);
            $command->bindParam(':RUT',$data->Rut);
            $command->bindParam(':NOMBRE',$data->Nombre);
            $command->bindParam(':RAZON_SOCIAL',$data->RazonSocial);
            return $command->execute(); //bool
        }catch(Exception $e){
            die('Error al intentar guardar registro: '.$e->getMessage());
        }
    }

    public function Update($data)
    {
        $query = 'UPDATE empresa SET NOMBRE = :NOMBRE, RAZON_SOCIAL = :RAZON_SOCIAL WHERE RUT = :RUT';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':RUT',$data->Rut);
        $command->bindParam(':NOMBRE',$data->Nombre);
        $command->bindParam(':CODIGO_TIPO_TURNO',$data->RazonSocial);
        return $command->execute(); //bool
    }

    public function Delete($data)
    {
        $query = 'DELETE FROM empresa WHERE RUT = :RUT';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':RUT',$data->Rut);
        return $command->execute(); //bool
    }

}