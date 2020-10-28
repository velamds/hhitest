<?php

class Pedido{

    private $pdo;

    private $id;
    private $cliente;
    private $producto;
    private $cantidad;
    private $fecha;

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
     * Get the value of pedido
     */ 
    public function getCliente() : ?int
    {
        return $this->cliente;
    }

    /**
     * Set the value of pedido
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
        /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pedido;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM pedido WHERE id=?;");
            $consulta->execute(array($id));
            $consulta->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
            return $consulta->fetch();

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Pedido $pedido){
        try{
            $consulta="INSERT INTO pedido(cliente, producto ,cantidad) VALUES (?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $pedido->getCliente(),
                        $pedido->getProducto(),
                        $pedido->getCantidad()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Pedido $pedido){
        try{
            $consulta="UPDATE pedido SET 
                cliente=?,
                producto=?,
                cantidad=?
                WHERE id=?;
            ";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $pedido->getCliente(),
                        $pedido->getProducto(),
                        $pedido->getCantidad(),
                        $pedido->getId()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function VentasPorProducto(){
        try{
            $consulta=$this->pdo->prepare("SELECT count(id) as venta,producto FROM pedido GROUP BY producto;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ComprasPorCliente(){
        try{
            $consulta=$this->pdo->prepare("SELECT count(id) as compra,cliente FROM pedido GROUP BY cliente;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function ComprasPorFecha(){
        try{
            $consulta=$this->pdo->prepare("SELECT count(id) as compra,fecha FROM pedido GROUP BY fecha;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


}