<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>
    <form action="C_editarUser.php" method="post">
        <?php foreach($usuarios as $usuario){

        } ?>
        <input type="text" name="username"  value="<?php echo  $usuario['username']?>">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="Guardar">
    </form>
</body>

</html>