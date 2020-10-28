<?php

require_once "models/pedido.php";
require_once "models/cliente.php";
require_once "models/producto.php";

class PedidoController{
    private $model;
    private $clientes;
    private $productos;

    public function __construct(){
        $this->model=new Pedido;
        $this->clientes = new Cliente;
        $this->productos = new Producto;
    }

    public function Home(){
        require_once "views/header.php";
        require_once "views/pedido/index.php";
        require_once "views/footer.php";
    }

    public function Form(){
        $titulo="Registrar";
        $pedido=new Pedido();
        if(isset($_GET['id'])){
            $pedido=$this->model->Obtener($_GET['id']);
            $titulo="Modificar";
        }
        require_once "views/header.php";
        require_once "views/pedido/form.php";
        require_once "views/footer.php";
    }

    public function Guardar(){
        $pedido=new Pedido();
        $pedido->setId(intval($_POST['id']));
        $pedido->setCliente($_POST['clientes']);
        $pedido->setProducto($_POST['productos']);
        $pedido->setCantidad($_POST['cantidad']);

        if($pedido->getId() > 0){
            $this->model->Actualizar($pedido);
        }else{
            $this->model->Insertar($pedido);
        }

        header("location:?c=pedido");
    }





}