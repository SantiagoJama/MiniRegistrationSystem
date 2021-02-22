<?php
session_start();
require_once('src/model/Managerm.php');
class Managerc{
    private $model;
    private $table;

    public function  __construct(){
        $this->model = new Managerm();
    }

    public function set_data(){
                if (empty($_REQUEST['name']) || empty($_REQUEST['nick']) || empty($_REQUEST['lastname'])){
                    header ("Location: src/view/Registro.php");
                    $_SESSION['message'] = "Debe llenar todos los campos para registrarse";
                }
                else{
                    $this->model->user_name = $_REQUEST['name'];
                    $this->model->user_nick = $_REQUEST['nick'];
                    $this->model->user_lastname = $_REQUEST['lastname'];
                    $this->model->set_data($this->model);
                    header ("Location: src/view/Registro.php");
                    $_SESSION['message']="¡Te has registrado!";
                }
    }
    public function get_home(){
        header ("Location: src/view/home.php");
    }
}