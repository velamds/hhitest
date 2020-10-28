<?php
require_once "models/cliente.php";

class ClienteController{
    private $model;


    public function __construct(){
        $this->model=new Cliente;
    }

    public function Home(){
        require_once "views/header.php";
        require_once "views/cliente/index.php";
        require_once "views/footer.php";
    }

    public function Form(){
        $titulo="Registrar";
        $cliente=new Cliente();
        if(isset($_GET['id'])){
            $cliente=$this->model->Obtener($_GET['id']);
            $titulo="Modificar";
        }
        require_once "views/header.php";
        require_once "views/cliente/form.php";
        require_once "views/footer.php";
    }

    public function Guardar(){
        $cliente=new Cliente();
        $cliente->setId(intval($_POST['id']));
        $cliente->setNombre($_POST['nombre']);
        $cliente->setTelefono($_POST['telefono']);
        $cliente->setDireccion($_POST['direccion']);
        $cliente->setEmail($_POST['email']);

        if($cliente->getId() > 0){
            $this->model->Actualizar($cliente);
        }else{
            $cliente->setContrasena(md5(sha1($_POST['contrasena'].'hhitest')));
            $this->model->Insertar($cliente);
        }

        header("location:?c=cliente");
    }





}