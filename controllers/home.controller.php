<?php

require_once "models/pedido.php";
require_once "models/cliente.php";
require_once "models/producto.php";

class HomeController{
    private $pedido;
    private $clientes;
    private $productos;

    public function __construct(){
        $this->pedido=new Pedido;
        $this->clientes = new Cliente;
        $this->productos = new Producto;
    }

    public function Home(){
        require_once "views/header.php";
        require_once "views/home/index.php";
        require_once "views/footer.php";
    }

    public function VentasProducto(){
        $ventas = array_map(function($venta){
            $venta->producto = ($this->productos->Obtener($venta->producto)->getNombre());
            return $venta;
        },$this->pedido->VentasPorProducto());
        require_once "views/header.php";
        require_once "views/home/ventas_producto.php";
        require_once "views/footer.php";
        require_once "views/home/script_ventas_producto.php";
    }

    
    public function ComprasCliente(){
        $comprasCliente = array_map(function($compra){
            $compra->cliente = ($this->clientes->Obtener($compra->cliente)->getNombre());
            return $compra;
        },$this->pedido->ComprasPorCliente());
        require_once "views/header.php";
        require_once "views/home/compras_cliente.php";
        require_once "views/footer.php";
        require_once "views/home/script_compras_cliente.php";
    }

    
    public function ComprasFecha(){
        $comprasFecha = $this->pedido->ComprasPorFecha();
        require_once "views/header.php";
        require_once "views/home/compras_fecha.php";
        require_once "views/footer.php";
        require_once "views/home/script_compras_fecha.php";
    }



}