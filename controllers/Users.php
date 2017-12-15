<?php
class Users extends Controller {
    function __construct()
    {
        parent::__construct();
    }
    //Método index
    public function index()
    {
        //Cargamos el módelo de contactos
        $Loader = new LoadModel("UsersModel");
        $usersModel = new UsersModel();
        $users = $usersModel->ReadAll();
        //Utilizamos Layout de nuestro Core
        $ViewUsers = new Layout("Users/index.php", compact("users"));
    }
}