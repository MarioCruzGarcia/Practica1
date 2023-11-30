<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <header>
        <h1>INDEX de juegos</h1>
        <a href="index.php">Ir a inicio</a>
    </header>
    <main>
        <a href="?controller=juego&function=create">Crear juego</a>
        <table>
            <caption>juegos</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Genero <br></br>
                     <button> <a href="?controller=juego&function=index">Todos</a></button>
                     <button><a href="?controller=juego&function=index&genero=Aventura">aventura</a></button>
                     <button><a href="?controller=juego&function=index&genero=Accion">Accion</a></button>
                     <button><a href="?controller=juego&function=index&genero=Deportes">Deportes</a></button>
                    </th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Precio <br></br>
                    <button>Precio mayor</button>
                    <button>Precio menor</button>
                    </th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($_GET['genero'])) {
                    


                        foreach ($juegos as $id => $value) {
                            echo '<tr>';
                            echo '<td>' . $value['id'] . '</td>';
                            echo '<td>' . $_GET['genero'] . '</td>';
                            echo '<td>' . $value['nombre'] . '</td>';
                            echo '<td>' . $value['descripcion'] . '</td>';
                            echo '<td>' . $value['stock'] . '</td>';
                            echo '<td>' . $value['precio'] . '</td>';
                            echo '<td>  <a href="?controller=juego&function=edit&id=' . $id . '">Editar</a>
                                <a href="?controller=juego&function=destroy&id=' . $id . '">Eliminar</a>
                                                             </td>';
                            echo '</tr>';
                        }
                    
                }else{
                    foreach ($juegos as $id => $value) {
                        foreach ($value as $id1 => $cosas) {
                            echo '<tr>';
                            echo '<td>' . $cosas['id'] . '</td>';
                            echo '<td>' . $id . '</td>';
                            echo '<td>' . $cosas['nombre'] . '</td>';
                            echo '<td>' . $cosas['descripcion'] . '</td>';
                            echo '<td>' . $cosas['stock'] . '</td>';
                            echo '<td>' . $cosas['precio'] . '</td>';
                            echo '<td>  <a href="?controller=juego&function=edit&id=' . $id . '">Editar</a>
                                <a href="?controller=juego&function=destroy&id=' . $id . '">Eliminar</a>
                                                             </td>';
                            echo '</tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
        <?php
        if (isset($error)) {
            echo '<h3>' . $error . '</h3>';
        }
        ?>
    </main>
</body>

</html>