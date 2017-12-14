<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 13/12/2017
 * Time: 20:13
 */

interface ModelCRUD {

    public function ReadOne();
    public function ReadAll();
    public function Save($data);
    public function Update();
    public function Delete();

}