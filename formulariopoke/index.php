<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>login</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
   <h2>Iniciar sesión:</h2> 
   <form action="procesar.php" method="POST">
    <p><label for="nickname">Usuario</label>
    <input type="text" name="nickname"></p>

    <p><label for="password">Contraseña</label>
    <input type="text" name="password"></p>

    <p><input type="submit" value=Acceder></p>

   </form>
</body>
</html>