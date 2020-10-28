<?php

class Pedido{

    private $pdo;

    private $id;
    private $cliente;
    private $producto;
    private $cantidad;

    public function __construct(){
        $this->pdo = Database::Connect();
    }

    /**
     * Get the value of id
     */ 
    public function getId() :?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente() : ?int
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente(int $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of producto
     */ 
    public function getProducto() : ?int
    {
        return $this->producto;
    }

    /**
     * Set the value of producto
     *
     * @return  self
     */ 
    public function setProducto(int $producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get the value of cantidad
     */ 
    public function getCantidad() : ?int 
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */ 
    public function setCantidad(int $cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }
}