<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:08
 */

class TipoTurno extends Controller {

    //Método que permite generar una instancia del modelo para ser reutilizada
    private $Model;
    private function getModel() {
        if(!isset($this->Model)){
            //Se realiza require() del modelo
            $Loader = new LoadModel("TipoTurnoModel");
            //Se crea una instancia del modelo
            $this->Model = new TipoTurnoModel();
        }
        return $this->Model;
    }

    function __construct() {
        parent::__construct();
    }

    public function index() {
        //Se llama al méthos que traerá todos los datos
        $list = $this->getModel()->ReadAll();
        //Se instancia de la vista pasando como parámetro la lista al contenido
        $View = new Layout("TipoTurno/index.php", compact("list"));
    }

    public function save(){
        $model = $this->getModel();
        $data = new Object($_POST['codigo'], $_POST['nombre']);
        if($model->Save($data)){
            $View = new Layout("TipoTurno/index.php", compact("data"));
        }else {
            die('No se pudo guardar el registro.');
        }
    }

}