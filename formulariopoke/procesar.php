<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilospoke.css">
</head>
<body>
  
<a href="https://www.google.com/?hl=es">pokedex</a>
 
</body>
</html>



<?php
if(!empty($_POST['nickname'])&& !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password  = $_POST['password'];
    if($nickname == "usuario" && $password=="123"){
 echo " ahora puedes ir a la pokedex ";
    }      
  
}


