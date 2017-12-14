<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:24
 */

class Object {

    public $Codigo;
    public $Nombre;

    function __construct($codigo, $nombre){
        $this->Codigo = $codigo;
        $this->Nombre = $nombre;
    }

}

class TipoTurnoModel extends Model implements ModelCRUD {

    public function ReadOne()
    {
        $query = 'SELECT * FROM tipo_turno WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$id);
        return $command->fetch(); //mixed
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "SELECT * FROM tipo_turno";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll(); // array
    }

    private function getId(){
        try{
            $query = "SELECT MAX(CODIGO) AS id FROM tipo_turno";
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
            $query = 'INSERT INTO tipo_turno (CODIGO, NOMBRE) VALUES (:CODIGO, :NOMBRE)';
            $command = $this->mariadb->prepare($query);
            $command->bindParam(':CODIGO',$data->Codigo);
            $command->bindParam(':NOMBRE',$data->Nombre);
            return $command->execute(); //bool
        }catch(Exception $e){
            die('Error al intentar guardar registro: '.$e->getMessage());
        }
    }

    public function Update()
    {
        $query = 'UPDATE tipo_turno SET NOMBRE = :NOMBRE WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$id);
        $command->bindParam(':NOMBRE',$data->nombre);
        return $command->execute(); //bool
    }

    public function Delete()
    {
        $query = 'DELETE FROM tipo_turno WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$id);
        return $command->execute(); //bool
    }

}