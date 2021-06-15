<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Registro</h1>

        <ul>
            <?php foreach($menu as $item): ?>
                <li><a href="<?= $item['url'] ?>"><?=$item['title'] ?></a></li>
            <?php endforeach; ?>

        </ul>

        <?php 

        // !VAMOS A ENVIAR LOS DATOS A EL CONTROLADOR REGISTRO/ FUNCION CREATE
            echo form_open('registro/create', array('method' => 'POST'));
            echo form_label('Nombre de usuario:');
            echo form_input('username');

            echo "<br>";
            echo form_label('Correo Electronico');
            echo form_input(array('type' => 'email', 'name' =>'email'));

            echo "<br>";
            echo form_label('Contrasena');
            echo form_password('password');

            echo "<br>";
            echo form_label('Confirmacion de contrasena');
            echo form_password('password_confirm');
            
            echo form_submit('submit', 'Enviar Datos');
            echo form_close();
        ?>
    </body>
</html>