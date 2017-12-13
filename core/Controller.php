<?php

 class Controller
 {

     //Constructor
     //gunify.com/index.php?controller=CONTROLLER_NAME&action=METHOD_NAME
     function __construct()
     {
         //validando si se encuentra un método en el action
         if ($_GET && isset($_GET["action"]))
         {
             //action contendrá el método (index, getUsers, doLogin, etc.)
             $action = $_GET["action"];
             //si esta acción existe
             if (method_exists($this, $action))
             {
                 $this -> $action();
             }
             else
             {
                 //por el contrario
                 die("404 not found.");
             }
         }
         else
         {
             //Si no se encuentra un método llamar al método por defecto (index)
             if (method_exists($this, "index"))
             {
                 $this -> index();
             }
             else
             {
                 //Si este método no se encuentra
                 die("Index method not found.");
             }
         }



     }

 }