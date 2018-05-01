<?php
include_once "pag/conexion.php";
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/diseño.css">
  <link rel="stylesheet" href="icon/style.css">
  
  <meta name="viewport" content="width=device-widht, initial-scale=1-0">
<head>
	<title>Inico</title>
</head>
<body>
<div id="agrupar">
<!--titulo-->
<header id="cabecera">
	<h1 class="tit">CLINICA DENTAL</h1>
 	<h2 class="tit2">Dibujando Una Mejor Sonrisa</h2>
</header>
<!--fin del titulo-->

<!--Menu lateral izquerdo-->
<div id="miMenu">
 <nav id="menu">
 <ul id="listaMenu1">
 <li><a href="principal.html" id="inicio">Inicio</a></li>
 <li><a href="pag/Tratamientos.html">Tratamientos</a></li>
 <li><a href="pag/Noticias.html">Noticias</a></li>
 <li><a href="pag/Conocenos.html">Conocenos</a></li>
 <li><a href="pag/Promociones.html">Promociones</a></li>
 </ul>
 </nav>
 </div>
<!--Fin del Menu lateral izquierdo-->


<!--Informacion principal-->
<section id="seccion">
 <figure >
 <img id="img" src="img/inicio.png" width="300px">
 </figure>
 <h1>El consultorio dental constituye el lugar donde se desarrolla la actividad profesional del odontologo, del higienista y de auxiliar dental.
 Nos comprometemos a entregar la maxima calidad en nuestro trabajo. Pero ademas, para nosotros es tambien prioritario el estilo del servicio que brindamos: Nos preocupa que nuestra atencion, en todos sus detalles sea agradable para nuestros pacientes. Esa es nuestra filosofia.
 El consultorio dental constituye el lugar donde se desarrolla la actividad profesional del odontologo, del higienista y de auxiliar dental.
 Nos comprometemos a entregar la maxima calidad en nuestro trabajo. Pero ademas, para nosotros es tambien prioritario el estilo del servicio que brindamos: Nos preocupa que nuestra atencion, en todos sus detalles sea agradable para nuestros pacientes. Esa es nuestra filosofia.</h1>
<br> 
<h1>¿Que es la Ortondoncia?</h1>

<h1>Es la especialidad de la odontologia que corrige los huesos y los dientes que estan mal colocados.

Cuando el paciente es infantil podemos corregir tanto los problemas de dientes como el de los huesos ,estos ultimos mediante ortopedia.</h1> 

<!--Fin de la informacion personal-->
<section id="seccion2">

	
<!--Inicio de Login-->
  <div>     
 <header id="login">
<div class="container-form" >
        <div class="header">
            <div class="logo-title">
                <img src="img/dental.jpg" alt="">
                <h2>Una nueva Sonrisa</h2>
            </div>
            <div class="menu">
                <a href=""><li id="textcolor" class="active">Iniciar Sesion</li></a>
                <a href="pag/datos.php"><li id="textcolor2" class="module-register active">Registrarse</li></a>
            </div>
        </div>
        <form class="form" action="#" method="post">
            <div class="welcome-form"><h1>BIENVENIDO</h1><h2>APPDENTAL</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="contraseña">
            </div>
            <button name="guardar" type="submit"><a id="textboton" >Entrar</a></button>
        </form>
        <?php
        if(isset($_POST['guardar'])){

          $user=$_POST['usuario'];
          $clave=$_POST['contraseña'];
          if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
            $usua=pg_query($con,"SELECT usuario FROM usuario WHERE usuario='$user'");
            $contra=pg_query($con,"SELECT contraseña FROM usuario WHERE contraseña='$clave'");

          $row=pg_fetch_array($usua);

          session_start();
          $_SESSION['usuario']=$row;
          $_SESSION['contraseña']=$contra;  
          header("Location: pag/entrada.php");
        }else{

        }

        }
        ?>
    </div>
</header>
 </div>

<!--Fin de login de inicio-->
	
</section>


</section>


<!--redes sociales-->
<div id="apps">
 <aside id="columna2">
 	<h1 >Sigueme en:</h1>
 <a href="https://wwww.facebook.com/">
   <figure>
     <img src="img/face.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.instagram.com/">
   <figure>
     <img src="img/insta.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 <a href="https://www.youtube.com/">
   <figure>
     <img src="img/you.png" style="width:40px;height:30px" class="img">
   </figure>
 </a>
 </aside>
 </div>
<!--fin de redes sociales-->


<!--Pie-->
<footer id="pie">
	Derechos Reservados SADCV
	
</footer>
<!--Fin del pie-->
</div>	
</body>
</html>