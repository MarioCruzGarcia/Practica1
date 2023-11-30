<?php
require_once 'controller/ClienteController.php';
require_once 'controller/JuegoController.php';
require_once 'controller/CompraController.php';
require_once 'db/datos.php';


$GLOBALS['clientes'] = $datos['Clientes'];
$GLOBALS['juegos'] = $datos['Juegos'];
$GLOBALS['Compras'] = $datos['Compras'];

if (isset($_GET['controller']) && isset($_GET['function'])) {

    $controller = $_GET['controller'];

    $controller = $controller . 'Controller';

    $controller = ucfirst($controller);

    $function = $_GET['function'];


    if (class_exists($controller)) {

        if (method_exists($controller, $function)) {
            if (isset($_GET['id'])) {

                $id = $_GET['id'];
                call_user_func($controller . '::' . $function, $id);
            } else {

                call_user_func($controller . '::' . $function);
            }

        } else {
            include('view/error/404.php');
            echo 'ERROR: no existe la funcion que buscas en el controlador. Revisa tu proyecto';
        }
    } else {
        echo 'ERROR: No existe el controlador que buscas. Revisa tu proyecto';
        include('view/error/404.php');
    }
} else {

    include('view/index.php');
}



?>