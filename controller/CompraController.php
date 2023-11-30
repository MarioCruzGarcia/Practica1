<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class CompraController implements Controller
{

    
    public static function index()
    {
        
        $compras = $GLOBALS['Compras'];

        if (isset($GLOBALS['error'])) {
            $error = $GLOBALS['error'];
        }

        include 'view/compras/index.php';
    }

    public static function create()
    {
        include 'view/compras/create.php';
    }

    public static function save()
    {
        $cliente_dni = $_POST['cliente_dni'];
        $juego_id = $_POST['juego_id'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];
        CompraController::index();
    }
    

    public static function edit($id)
    {
        

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $compras = $GLOBALS['Compras'];
  foreach ($compras as $key => $value) {
    if ($key == $id) {
      #PINTO
      $compra = $value;
    }
  }
}

        include 'view/compras/edit.php';
    }

    public static function update($id)
    {

        
        $cliente_dni = $_POST['cliente_dni'];
        $juego_id = $_POST['juego_id'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        
        foreach ($GLOBALS['Compras'] as $key => $value) {
            if ($key == $id) {
                $GLOBALS['Compras'][$key]['cliente_dni'] = $cliente_dni;
                $GLOBALS['Compras'][$key]['juego_id'] = $juego_id;
                $GLOBALS['Compras'][$key]['precio'] = $precio;
                $GLOBALS['Compras'][$key]['cantidad'] = $cantidad;
                $GLOBALS['Compras'][$key]['fecha'] = $fecha;
            } else {
            }
        }
        CompraController::index();
    }

    public static function destroy($id)
    {

        
        if (array_key_exists($id, $GLOBALS['Compras'])) {
            unset($GLOBALS['Compras'][$id]);
        } else {
            $GLOBALS['error'] = "No se encuentra el compra";
        }
        compraController::index();
    }


}



?>