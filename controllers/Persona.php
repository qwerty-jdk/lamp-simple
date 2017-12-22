<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/12/2017
 * Time: 22:57
 */

class Persona extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $PersonaLoader = new LoadModel("PersonaModel");
        $SedesLoader = new LoadModel("SedeModel");
        $modelPersona = new PersonaModel();
        $modelSede = new SedeModel();
        $data = array();
        $data['personas'] = $modelPersona->ReadAll();
        $data['sedes'] = $modelSede->ReadAll();
        $View = new Layout("Persona/index.php", compact("data"));
    }

    public function save() {
        try {
            $PersonaLoader = new LoadModel("PersonaModel");
            $SedesLoader = new LoadModel("SedeModel");
            $modelPersona = new PersonaModel();
            $modelSede = new SedeModel();
            $data = new schemaPersona(
                $_POST['rut'],
                $_POST['primer_nombre'],
                $_POST['segundo_nombre'],
                $_POST['primer_apellido'],
                $_POST['segundo_apellido'],
                $_POST['sexo'],
                $_POST['fecha_nacimiento'],
                $_POST['sede']);
            $result = $modelPersona->ReadOne($data);
            $saved = isset($result['RUT']) ? $modelPersona->Update($data) : $modelPersona->Save($data);
            if ($saved == true) {
                $data = array();
                $data['personas'] = $modelPersona->ReadAll();
                $data['sedes'] = $modelSede->ReadAll();
                $View = new Layout("Persona/index.php", compact("data"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}