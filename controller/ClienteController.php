<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class ClienteController implements Controller
{

   
    public static function index(){
        $clientes = $GLOBALS['clientes'];
        if(isset($_GET['orden'])){
            if($_GET['orden'] == 'asc'){
            }else{
                $clientes = array_reverse($GLOBALS['clientes']);
            }
        }
       
        include 'view/clientes/index.php';
    }

    public static function create()
    {
        include 'view/clientes/create.php';
    }

    public static function save()
    {
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        ClienteController::index();
    }

    

    public static function edit($id)
    {
       

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $clientes = $GLOBALS['clientes'];
  foreach ($clientes as $key => $value) {
    if ($key == $id) {
      #PINTO
      $cliente = $value;
    }
  }
}

        include 'view/clientes/edit.php';
    }

    public static function update($id)
    {

        
        
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        
        foreach ($GLOBALS['clientes'] as $key => $value) {
            if ($key == $id) {
                # Si la clave es la misma que el id, ACTUALIZO
                $GLOBALS['clientes'][$key]['nombre'] = $nombre;
                $GLOBALS['clientes'][$key]['dni'] = $dni;
                $GLOBALS['clientes'][$key]['telefono'] = $telefono;
                $GLOBALS['clientes'][$key]['correo'] = $correo;
            } else {
            }
        }
        ClienteController::index();
    }

    public static function destroy($id)
    {

        
        if (array_key_exists($id, $GLOBALS['clientes'])) {
            unset($GLOBALS['clientes'][$id]);
        } else {
            $GLOBALS['error'] = "No se encuentra el cliente";
        }
        clienteController::index();
    }


}



?>