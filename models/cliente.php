<?php

class Cliente{

    private $pdo;
    
    private $id;
    private $nombre;
    private $telefono;
    private $direccion;
    private $email;
    private $contrasena;


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
    public function setId(int $id)
    {
        $this->id = $id;

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
     * Get the value of telefono
     */ 
    public function getTelefono() : ?string
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion() : ?string
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena() : ?string
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena(string $contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM cliente;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS,__CLASS__);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM cliente WHERE id=?;");
            $consulta->execute(array($id));
            $consulta->setFetchMode(PDO::FETCH_CLASS, __CLASS__);
            return $consulta->fetch();

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Insertar(Cliente $cliente){
        try{
            $consulta="INSERT INTO cliente(nombre, telefono, direccion, email, contrasena) VALUES (?,?,?,?,?);";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $cliente->getNombre(),
                        $cliente->getTelefono(),
                        $cliente->getDireccion(),
                        $cliente->getEmail(),
                        $cliente->getContrasena()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar(Cliente $cliente){
        try{
            $consulta="UPDATE cliente SET 
                nombre=?,
                telefono=?,
                direccion=?,
                email=?,
                contrasena=?
                WHERE id=?;
            ";
            $this->pdo->prepare($consulta)
                    ->execute(array(
                        $cliente->getNombre(),
                        $cliente->getTelefono(),
                        $cliente->getDireccion(),
                        $cliente->getEmail(),
                        $cliente->getContrasena(),
                        $cliente->getId()
                    ));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}