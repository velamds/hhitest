<?php

class Database{

    private static $server="localhost";
    private static $dbUser="root";
    private static $password="";
    private static $dbName="hhitest";

    public static function Connect(){
        try{
            $conexion = new PDO("mysql:host=".self::$server.";dbname=".self::$dbName.";chartset=utf8",self::$dbUser,self::$password);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;

        }catch(PDOException $e){
            return "Error: ".$e->getMessage();
        }

    }


}