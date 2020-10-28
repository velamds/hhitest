<?php

class Producto{

    private $pdo;

    private $id;
    private $referencia;
    private $nombre;
    private $precio;


    public function __construct(){
        $this->pdo = Database::Connect();
    }

    /**
     * Get the value of id
     */ 
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of referencia
     */ 
    public function getReferencia() : ?string
    {
        return $this->referencia;
    }

    /**
     * Set the value of referencia
     *
     * @return  self
     */ 
    public function setReferencia(string $referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre() : ?string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio() : ?float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio(float $precio)
    {
        $this->precio = $precio;

        return $this;
    }
}