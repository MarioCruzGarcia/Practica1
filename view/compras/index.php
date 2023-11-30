<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body>
        <header>
            <h1>INDEX de compras</h1>
            <a href="index.php">Ir a inicio</a>
        </header>
        <main>
        <a href="?controller=compra&function=create">Crear compra</a>
            <table>
                <caption>compras</caption>
                <thead>
                    <tr>
                        <th>compra_dni</th>
                        <th>juego_id</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>fecha</th>
                        <th>Precio total</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                
                        if(isset($compras)){
                            
                            foreach ($compras as $id => $value) {
                           
                                echo '<tr>';
                                foreach($GLOBALS['clientes'] as $id1 => $value1){

                                    
                                        if($value1['dni'] == $value['cliente_dni']){
                                            $nombre_cliente = $value1['nombre'];
                                        }
                                    }
                                
                                echo '<td>'.$nombre_cliente .'</td>';

                                foreach($GLOBALS['juegos'] as $id1 => $value1){
                                    foreach ($value1 as $id2 => $value2) {
                                        if($value2['id'] == $value['juego_id']){
                                            $nombre_juego = $value2['nombre'];
                                        }
                                    }
                                }
                                echo '<td>'. $nombre_juego .'</td>';
                                echo '<td>'.$value['precio'].'</td>';
                                echo '<td>'.$value['cantidad'] .'</td>';
                                echo '<td>'.$value['fecha'] .'</td>';
                                echo '<td>'.$value['precio'] * $value['cantidad'].'</td>';

                                echo '<td>  <a href="?controller=compra&function=edit&id='.$id.'">Editar</a>
                                <a href="?controller=compra&function=destroy&id='.$id.'">Eliminar</a>
                                                             </td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>  
            <?php
                if(isset($error)){
                    echo '<h3>' . $error . '</h3>';
                }   
                ?>       
        </main>
    </body>
</html>