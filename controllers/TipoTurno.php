<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:08
 */

class TipoTurno extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $TipoTurnoLoader = new LoadModel("TipoTurnoModel");
        $modelTipoTurno = new TipoTurnoModel();
        //Se llama al méthos que traerá todos los datos
        $tipoTurnos = $modelTipoTurno->ReadAll();
        //Se instancia de la vista pasando como parámetro la lista al contenido
        $View = new Layout("TipoTurno/index.php", compact("tipoTurnos"));
    }

    public function save(){
        try {
            $TipoTurnoLoader = new LoadModel("TipoTurnoModel");
            $modelTipoTurno = new TipoTurnoModel();
            $data = new schemaTipoTurno($_POST['codigo'], $_POST['nombre']);
            $saved = isset($data->Codigo) && $data->Codigo > 0 ? $modelTipoTurno->Update($data) : $modelTipoTurno->Save($data);
            if ($saved == true) {
                $tipoTurnos = $modelTipoTurno->ReadAll();
                $View = new Layout("TipoTurno/index.php", compact("tipoTurnos"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}