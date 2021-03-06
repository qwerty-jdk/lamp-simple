<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:00
 */

class schemaTurno {

    public $Codigo;
    public $Nombre;
    public $TipoTurno;

    function __construct($codigo, $nombre, $tipoTurno){
        $this->Codigo = $codigo;
        $this->Nombre = $nombre;
        $this->TipoTurno = $tipoTurno;
    }

}

class TurnoModel extends Model implements IDao {

    public function ReadOne($data)
    {
        $query = 'SELECT * FROM turno WHERE CODIGO = '.$data->Codigo;
        $command = $this->mariadb->query($query);
        $result = $command->fetch();
        return $result;
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "SELECT * FROM turno";

        //Retornar un array
        $result = $this -> mariadb -> query($query);

        //Retornando el valor
        return $result -> fetchAll(); // array
    }

    public function getId()
    {
        try{
            $query = "SELECT MAX(CODIGO) AS id FROM turno";
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
            $query = 'INSERT INTO turno (CODIGO, NOMBRE, CODIGO_TIPO_TURNO) VALUES (:CODIGO, :NOMBRE, :CODIGO_TIPO_TURNO)';
            $command = $this->mariadb->prepare($query);
            $command->bindParam(':CODIGO',$data->Codigo);
            $command->bindParam(':NOMBRE',$data->Nombre);
            $command->bindParam(':CODIGO_TIPO_TURNO',$data->TipoTurno);
            return $command->execute(); //bool
        }catch(Exception $e){
            die('Error al intentar guardar registro: '.$e->getMessage());
        }
    }

    public function Update($data)
    {
        $query = 'UPDATE turno SET NOMBRE = :NOMBRE, CODIGO_TIPO_TURNO = :CODIGO_TIPO_TURNO WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$data->Codigo);
        $command->bindParam(':NOMBRE',$data->Nombre);
        $command->bindParam(':CODIGO_TIPO_TURNO',$data->TipoTurno);
        return $command->execute(); //bool
    }

    public function Delete($data)
    {
        $query = 'DELETE FROM turno WHERE CODIGO = :CODIGO';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':CODIGO',$data->Codigo);
        return $command->execute(); //bool
    }

}