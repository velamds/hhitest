<?php
//FrontController

require_once "models/database.php";

if(!isset($_GET['c'])){
    require_once "controllers/home.controller.php";
    $controller = new HomeController();
    call_user_func(array($controller,"Home"));
}else{
    $controller = $_GET['c'];
    require_once "controllers/$controller.controller.php";
    $controller = ucwords($controller)."Controller";
    $controller = new $controller;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Home";
    call_user_func(array($controller,$accion));
}