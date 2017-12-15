<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 15/12/2017
 * Time: 15:40
 */

class Empresa extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $EmpresaLoader = new LoadModel("EmpresaModel");
        $modelEmpresa = new EmpresaModel();
        $empresas = $modelEmpresa->ReadAll();
        $View = new Layout("Empresa/index.php", compact("empresas"));
    }

    public function save(){
        try {
            $EmpresaLoader = new LoadModel("EmpresaModel");
            $modelEmpresa = new EmpresaModel();
            $data = new schemaEmpresa($_POST['rut'], $_POST['nombre'], $_POST['razon_social']);
            $result = $modelEmpresa->ReadOne($data);
            $saved = isset($result['RUT']) ? $modelEmpresa->Update($data) : $modelEmpresa->Save($data);
            if ($saved == true) {
                $empresas = $modelEmpresa->ReadAll();
                $View = new Layout("Empresa/index.php", compact("empresas"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}