<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
      <h1><?php echo $uso; ?> Usuario</h1>
        <form method="post">
          <input type="hidden" name="id" value="<?php echo $user->id; ?>" />
          <label for="nombre">Nombre de Usuario</label>
          <input type="test" name="nombre" value="<?php echo $user->nombre; ?>" />
          <button type="submit">Enviar</button>
        </form>
    </body>
</html>
