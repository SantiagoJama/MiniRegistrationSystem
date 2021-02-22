<?php

require_once('src/controller/Managerc.php');

if (!isset($_REQUEST['c'])){
    $my_controller= new Managerc();
    $my_controller->get_home();
}
else{
    $controller = $_REQUEST['c'];
    $action = $_REQUEST['a'];
    $my_controller = new $controller();
    switch ($action){
        case "Guardar":
            $my_controller->set_data();
            break;
    }
}


