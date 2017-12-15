<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:04
 */

class TipoCompromiso extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $TipoCompromisoLoader = new LoadModel("TipoCompromisoModel");
        $modelTipoCompromiso = new TipoCompromisoModel();
        $tipoCompromisos = $modelTipoCompromiso->ReadAll();
        $View = new Layout("TipoCompromiso/index.php", compact("tipoCompromisos"));
    }

    public function save(){
        try {
            $TipoCompromisoLoader = new LoadModel("TipoCompromisoModel");
            $modelTipoCompromiso = new TipoCompromisoModel();
            $data = new schemaTipoCompromiso($_POST['codigo'], $_POST['nombre']);
            $saved = isset($data->Codigo) && $data->Codigo > 0 ? $modelTipoCompromiso->Update($data) : $modelTipoCompromiso->Save($data);
            if ($saved == true) {
                $tipoCompromisos = $modelTipoCompromiso->ReadAll();
                $View = new Layout("TipoCompromiso/index.php", compact("tipoCompromisos"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}