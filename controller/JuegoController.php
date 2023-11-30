<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class juegoController implements Controller
{

    
    public static function index()
    {
        
       
        
        
        if (isset($_GET['genero'])) {
            
            $juegos = $GLOBALS['juegos'][ $_GET['genero']];
           
            
        } else {
            $juegos = $GLOBALS['juegos'];
        }
        
        
        if (isset($GLOBALS['error'])) {
            $error = $GLOBALS['error'];
        }

        include 'view/juegos/index.php';
    }

    public static function create()
    {
        include 'view/juegos/create.php';
    }

    public static function save()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];
        juegoController::index();
    }
    


    public static function edit($id)
    {

        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $juegos = $GLOBALS['juegos'];
            foreach ($juegos as $key => $value) {
                if ($key == $id) {
                    #PINTO
                    $juegos = $value;
                }
            }
        }

        include 'view/juegos/edit.php';
    }

    public static function update($id)
    {

        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $stock = $_POST['stock'];
        $precio = $_POST['precio'];

        
        foreach ($GLOBALS['juegos'] as $key => $value) {
            if ($key == $id) {
                $GLOBALS['juegos'][$key]['id'] = $id;
                $GLOBALS['juegos'][$key]['nombre'] = $nombre;
                $GLOBALS['juegos'][$key]['descripcion'] = $descripcion;
                $GLOBALS['juegos'][$key]['stock'] = $stock;
                $GLOBALS['juegos'][$key]['precio'] = $precio;
            } else {
            }
        }
        juegoController::index();
    }

    public static function destroy($id)
    {

        
        if (array_key_exists($id, $GLOBALS['juegos'])) {
            unset($GLOBALS['juegos'][$id]);
        } else {
            $GLOBALS['error'] = "No se encuentra el juego";
        }
        juegoController::index();
    }


}



?>