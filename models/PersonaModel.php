<?php

class schemaPersona {

    public $Rut;
    public $PrimerNombre;
    public $SegundoNombre;
    public $PrimerApellido;
    public $SegundoApellido;
    public $Sexo;
    public $FechaNacimiento;
    public $CodigoSede;

    function __construct($rut, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $sexo, $fechaNacimiento, $codigoSede){
        $this->Rut = $rut;
        $this->PrimerNombre = $primerNombre;
        $this->SegundoNombre = $segundoNombre;
        $this->PrimerApellido = $primerApellido;
        $this->SegundoApellido = $segundoApellido;
        $this->Sexo = $sexo;
        $this->FechaNacimiento = $fechaNacimiento;
        $this->CodigoSede = $codigoSede;
    }

}

class PersonaModel extends Model implements IDao {

    public function ReadOne($data)
    {
        $query = 'SELECT * FROM persona WHERE RUT = "'.$data->Rut.'"';
        $command = $this->mariadb->query($query);
        $result = $command->fetch();
        return $result;
    }

    public function ReadAll()
    {
        //Consulta SQL
        $query = "SELECT * FROM persona";

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
            $query = 'INSERT INTO persona (RUT, PRIMER_NOMBRE, SEGUNDO_NOMBRE, PRIMER_APELLIDO, SEGUNDO_APELLIDO, SEXO, FECHA_NACIMIENTO, CODIGO_SEDE) VALUES (:RUT, :PRIMER_NOMBRE, :SEGUNDO_NOMBRE, :PRIMER_APELLIDO, :SEGUNDO_APELLIDO, :SEXO, :FECHA_NACIMIENTO, :CODIGO_SEDE)';
            $command = $this->mariadb->prepare($query);
            $command->bindParam(':RUT',$data->Rut);
            $command->bindParam(':PRIMER_NOMBRE',$data->PrimerNombre);
            $command->bindParam(':SEGUNDO_NOMBRE',$data->SegundoNombre);
            $command->bindParam(':PRIMER_APELLIDO',$data->PrimerApellido);
            $command->bindParam(':SEGUNDO_APELLIDO',$data->SegundoApellido);
            $command->bindParam(':SEXO',$data->Sexo);
            $command->bindParam(':FECHA_NACIMIENTO',$data->FechaNacimiento);
            $command->bindParam(':CODIGO_SEDE',$data->CodigoSede);
            return $command->execute(); //bool
        }catch(Exception $e){
            die('Error al intentar guardar registro: '.$e->getMessage());
        }
    }

    public function Update($data)
    {
        $query = 'UPDATE persona SET PRIMER_NOMBRE = :PRIMER_NOMBRE, 
                                     SEGUNDO_NOMBRE = :SEGUNDO_NOMBRE,
                                     PRIMER_APELLIDO = :PRIMER_APELLIDO,
                                     SEGUNDO_APELLIDO = :SEGUNDO_APELLIDO,
                                     SEXO = :SEXO,
                                     FECHA_NACIMIENTO = :FECHA_NACIMIENTO,
                                     CODIGO_SEDE = :CODIGO_SEDE WHERE RUT = :RUT';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':RUT',$data->Rut);
        $command->bindParam(':PRIMER_NOMBRE',$data->PrimerNombre);
        $command->bindParam(':SEGUNDO_NOMBRE',$data->SegundoNombre);
        $command->bindParam(':PRIMER_APELLIDO',$data->PrimerApellido);
        $command->bindParam(':SEGUNDO_APELLIDO',$data->SegundoApellido);
        $command->bindParam(':SEXO',$data->Sexo);
        $command->bindParam(':FECHA_NACIMIENTO',$data->FechaNacimiento);
        $command->bindParam(':CODIGO_SEDE',$data->CodigoSede);
        return $command->execute(); //bool
    }

    public function Delete($data)
    {
        $query = 'DELETE FROM persona WHERE RUT = :RUT';
        $command = $this->mariadb->prepare($query);
        $command->bindParam(':RUT',$data->Rut);
        return $command->execute(); //bool
    }
}