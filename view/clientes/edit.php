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
    <a href="?controller=cliente&function=index">Atras</a>

    <form method="post" action="index.php?controller=cliente&function=update&id=<?php echo $id ?>">
      <label for="nombre">nombre</label>
      <input value="<?php echo $cliente['nombre'] ?>" type="text" id="nombre" name="nombre" /><br />
      <label for="dni">dni</label>
      <input value="<?php echo $cliente['dni'] ?>" type="text" id="dni" name="dni" /><br />
      <label for="telefono">telefono</label>
      <input value="<?php echo $cliente['telefono'] ?>" type="text" id="telefono" name="telefono" /><br />
      <label for="correo">correo</label>
      <input value="<?php echo $cliente['correo'] ?>" type="text" id="correo" name="correo" /><br />
      <br />
      <button type="submit" id="enviar">Enviar</button>
    </form>
  </main>
</body>

</html>