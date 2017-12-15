<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:13
 */

interface IDao {

    public function ReadOne($data);
    public function ReadAll();
    public function getId();
    public function Save($data);
    public function Update($data);
    public function Delete($data);

}