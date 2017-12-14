<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:56
 */

class Turno extends Controller {

    //Método que permite generar una instancia del modelo para ser reutilizada
    private $Model;
    private function getModel() {
        if(!isset($this->Model)){
            //Se realiza require() del modelo
            $Loader = new LoadModel("TurnoModel");
            //Se crea una instancia del modelo
            $this->Model = new TurnoModel();
        }
        return $this->Model;
    }

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $list = $this->getModel()->ReadAll();
        $View = new Layout("Turno/index.php", "list");
    }

}