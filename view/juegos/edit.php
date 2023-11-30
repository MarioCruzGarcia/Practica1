<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/styleClientes.css">
  <title>Document</title>
</head>

<body>
  <main>
    <a href="?controller=juego&function=index">Atras</a>

    <form method="post" action="index.php?controller=juego&function=update&id=<?php echo $id ?>">
      <label for="id">id</label>
      <input value="<?php echo $juegos['id'] ?>" type="text" id="id" name="id" /><br />
      <label for="genero">genero</label>
      <input value="<?php echo $juegos['genero'] ?>" type="text" id="genero" name="genero" /><br />
      <label for="nombre">nombre</label>
      <input value="<?php echo $juegos['nombre'] ?>" type="text" id="nombre" name="nombre" /><br />
      <label for="descripcion">descripcion</label>
      <input value="<?php echo $juegos['descripcion'] ?>" type="text" id="descripcion" name="descripcion" /><br />
      <label for="stock">stock</label>
      <input value="<?php echo $juegos['stock'] ?>" type="text" id="stock" name="stock" /><br />
      <label for="precio">precio</label>
      <input value="<?php echo $juegos['precio'] ?>" type="text" id="precio" name="precio" /><br />
      <br />
      <button type="submit" id="enviar">Enviar</button>
    </form>
  </main>
</body>

</html>