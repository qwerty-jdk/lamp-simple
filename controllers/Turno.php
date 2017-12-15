<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:56
 */

class Turno extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $TurnoLoader = new LoadModel("TurnoModel");
        $TipoTurnoLoader = new LoadModel("TipoTurnoModel");
        $modelTurno = new TurnoModel();
        $modelTipoTurno = new TipoTurnoModel();
        //Se llama al méthos que traerá todos los datos
        $data = array();
        $data['turnos'] = $modelTurno->ReadAll();
        $data['tipoTurnos'] = $modelTipoTurno->ReadAll();
        //Se instancia de la vista pasando como parámetro la lista al contenido
        $View = new Layout("Turno/index.php", compact("data"));
    }

    public function save(){
        try {
            $TurnoLoader = new LoadModel("TurnoModel");
            $TipoTurnoLoader = new LoadModel("TipoTurnoModel");
            $modelTurno = new TurnoModel();
            $modelTipoTurno = new TipoTurnoModel();
            $data = new schemaTurno($_POST['codigo'], $_POST['nombre'], $_POST['tipo_turno']);
            $saved = isset($data->Codigo) && $data->Codigo > 0 ? $modelTurno->Update($data) : $modelTurno->Save($data);
            if ($saved == true) {
                $data = array();
                $data['turnos'] = $modelTurno->ReadAll();
                $data['tipoTurnos'] = $modelTipoTurno->ReadAll();
                $View = new Layout("Turno/index.php", compact("data"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}