<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:56
 */

class Sede extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $EmpresaLoader = new LoadModel("EmpresaModel");
        $SedeLoader = new LoadModel("SedeModel");
        $modelEmpresao = new EmpresaModel();
        $modelSede = new SedeModel();
        //Se llama al méthos que traerá todos los datos
        $data = array();
        $data['empresas'] = $modelEmpresao->ReadAll();
        $data['sedes'] = $modelSede->ReadAll();
        //Se instancia de la vista pasando como parámetro la lista al contenido
        $View = new Layout("Empresa/index.php", compact("data"));
    }

    public function save(){
        try {
            $EmpresaLoader = new LoadModel("EmpresaModel");
            $SedeLoader = new LoadModel("SedeModel");
            $modelEmpresa = new EmpresaModel();
            $modelSede = new SedeModel();
            $data = new schemaTurno($_POST['codigo'], $_POST['nombre'], $_POST['telefono'], $_POST['calle'], $_POST['numero'], $_POST['comuna'], $_POST['ciudad']);
            $saved = isset($data->Codigo) && $data->Codigo > 0 ? $modelSede->Update($data) : $modelSede->Save($data);
            if ($saved == true) {
                $data = array();
                $data['empresas'] = $modelEmpresa->ReadAll();
                $data['sedes'] = $modelSede->ReadAll();
                print_r($data['empresas']);
                $View = new Layout("Empresa/index.php", compact("data"));
            }else
                die('No se pudo guardar el registro.');
        }catch(Exception $e){
            die('Error al guardar el registro: '.$e->getMessage());
        }
    }

}