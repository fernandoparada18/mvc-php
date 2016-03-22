<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
    </head>
    <body>
      <h1>Lista de usuarios</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user["id"]; ?></td>
                    <td><?php echo $user["nombre"]; ?></td>
                    <td><a href="<?php echo URL . 'home/update/' . $user['id']; ?>">Editar</a></td>
                    <td><a href="<?php echo URL . 'home/delete/' . $user['id']; ?>">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <p>
          <a href="<?php echo URL . 'home/insert/'?>">Agregar</a>
        </p>
    </body>
</html>
