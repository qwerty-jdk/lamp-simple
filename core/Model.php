<?php

class Model{

    //Instancia de mi base de datos
    protected $mariadb = null;

    function __construct()
    {
        //Intentar la conexión con la base de datos
        try {
            $this -> mariadb = $this->getConnection();
        }
        catch (PDOException $ex) {
            $e = $ex -> getMessage();
            die("Error: $e");
        }
    }

    //Método para realizar conexión con la base de datos
    private function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $password = "3ndgl0ry";
        $database = "kyfdb";
        $charset = "utf8";
        $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        $pdo = new pdo("mysql:host={$host};dbname={$database};charset={$charset}", $user, $password, $opt);

        //Permitir que PDO pueda devolver excepciones en el try catch ($e)
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }





}