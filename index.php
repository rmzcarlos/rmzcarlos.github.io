<!DOCTYPE html>
<html>
<head>
    <title>Registrar usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
        <h1>¡Suscribete!</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="materia" placeholder="Materia">
        <input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>