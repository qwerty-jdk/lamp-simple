<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 21:04
 */

class TipoCompromiso extends Controller {

    //Método que permite generar una instancia del modelo para ser reutilizada
    private $Model;
    private function getModel() {
        if(!isset($this->Model)){
            //Se realiza require() del modelo
            $Loader = new LoadModel("TipoCompromisoModel");
            //Se crea una instancia del modelo
            $this->Model = new TipoCompromisoModel();
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
        $View = new Layout("TipoCompromiso/index.php", compact("list"));
    }

}