<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
 <title>RegistrarUsuario</title>
 <link rel="stylesheet" href="../css/estiloregistro.css">
 <link rel="stylesheet" href="../icon/style.css">
</head>
<body>
 <!--Registrar!-->

<?php 
include_once "conexion.php";
?>

<?php

if ($_POST) {
  $result = pg_query($con, "INSERT INTO usuario (apellidom,apellidop,edad,contraseña,correo,estado,nombre,sexo,telefono,usuario,ciudad) VALUES (
  '".pg_escape_string($_POST['apellidom'])."'
  ,
  
  '".pg_escape_string($_POST['apellidop']) . "'
  
  ,
  
  '".pg_escape_string($_POST['edad']) . "'
  
  ,
  
  '".pg_escape_string($_POST['contraseña']) . "'
  
  ,
  
  '".pg_escape_string($_POST['correo']) . "'
  
  ,
  
  '".pg_escape_string($_POST['estado']) . "'
  
  ,
  
  '".pg_escape_string($_POST['nombre']) . "'
  
  ,
  
  '".pg_escape_string($_POST['sexo']) . "'
  
  ,
  
  '".pg_escape_string($_POST['telefono']) . "'
  
  ,
  
  '".pg_escape_string($_POST['usuario']) . "'
  ,
  
  '".pg_escape_string($_POST['ciudad'])."')");
       
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }
}
?>
<section id="seccion">
 <div class="container-form2">
        <div class="header">
            <div class="logo-title">
                <img src="../img/dental.jpg" >
                <h2>APPDENTAL</h2>
            </div>
            <div class="menu">
                <a href="datos.php"><li class="module-register active">Registrarse</li></a>
            </div>
        </div>

        <form action="datos.php" method="post" class="form">
            <div class="welcome-form"><h1>BIENVENIDO</h1><h2>APPDENTAL</h2></div>

            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="contraseña">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input type="text" placeholder="Nombre" name="nombre">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input type="text" placeholder="Apellido Paterno" name="apellidop">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input type="text" placeholder="Apellido Materno" name="apellidom">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-pencil"></label>
                <input type="text" placeholder="Edad" name="edad">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-users"></label>
                <input type="text" placeholder="Sexo" name="sexo">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-phone"></label>
                <input type="text" placeholder="Telefono" name="telefono">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-apartment"></label>
                <input type="text" placeholder="Ciudad" name="ciudad">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-apartment"></label>
                <input type="text" placeholder="Estado" name="estado">
            </div>
            <button type="submit">Registrarse</button>
    </form>
    <form action="../principal.html" class="form">
    	<button type="submit"><a id="textboton" >Cancelar</a></button>   	
    </form>
    </div>
    </section>
      <?php
include_once "closeconexion.php";
?>
 <!-- Fin de Registrar-!-->
</body>
</html>
