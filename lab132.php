<?php
    if( array_key_exists('enviar', $_POST) ) {
        $expire = time()+60*5;
        setcookie("user", $_REQUEST['visitante'], $expire);
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Laboratorio 13</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Creación de Cookies</h1>
    <h2>La cookie "User" tendrá solo 5 minutos de duración</h2>
    <?php
    if( isset($_COOKIE["user"]) ) {
        print("<br/>Hola <b>" . $_COOKIE['user'] . "</b> gracias por visitar nuestro sitio web<br/>");
    } else {
        ?>

            <form action="lab132.php" name="formcookie" method="post">
                <br/>Hola, primera vez que te vemos por nuestro sitio web. ¿Cómo te llamas?
                <input type="text" name="visitante">
                <input type="submit" name="enviar" value="Gracias por indentificarte">
            </form>

    <?php
    }
    ?>
    <br/><a href="lab133.php">Continuar...</a>
</body>
</html>