<?php

require_once "models/producto.php";

class ProductoController{

    private $model;

    public function __construct(){
        $this->model=new Producto;
    }


    public function Home(){
        require_once "views/header.php";
        require_once "views/producto/index.php";
        require_once "views/footer.php";
    }

    public function Form(){
        $titulo="Registrar";
        $producto=new Producto();
        if(isset($_GET['id'])){
            $producto=$this->model->Obtener($_GET['id']);
            $titulo="Modificar";
        }
        require_once "views/header.php";
        require_once "views/producto/form.php";
        require_once "views/footer.php";
    }

    public function Guardar(){
        $producto=new Producto();
        $producto->setId(intval($_POST['id']));
        $producto->setNombre($_POST['nombre']);
        $producto->setReferencia($_POST['referencia']);
        $producto->setPrecio($_POST['precio']);

        $producto->getId() > 0 ?
        $this->model->Actualizar($producto) :
        $this->model->Insertar($producto);

        header("location:?c=producto");
    }






}