<?php
include 'conexion1.php';
//Recibe los datos y los almacena en variables
$nombre=$_POST["name"];
$correo=$_POST["email"];
$mensaje=$_POST["message"];

//consulta para insertar datos
$insertar="INSERT INTO contactanos(NOMBRE,CORREO,MENSAJE) VALUES('$nombre','$correo','$mensaje')";
$resultado=mysqli_query($conexion,$insertar);
if(!$resultado) 
{
echo 'ERROR AL REGISTRAR EL USUARIO ';
}
else 
{
//echo '("Usuario registrado exitosamente")';
}
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Known - Education HTML Template</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="botones/css/main.css" />

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
   
           <header id="header">
					<h1 id="logo"><a href=""></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="file:///C:/xampp/htdocs/titulacion/inicio.html">Inicio</a></li>
							<li>
								<a href="file:///C:/xampp/htdocs/titulacion/conocenos.html">Conócenos</a>
								
							</li>
							<li><a href="file:///C:/xampp/htdocs/contactanos/contactanos.html">Contáctanos</a></li>
                            <li><a href="file:///C:/xampp/htdocs/titulacion/galeria.html">Galeria</a></li>
                            <li><a href="file:///C:/xampp/htdocs/titulacion/requisitos.html">Registros</a></li>
                            <li><a href="file:///C:/xampp/htdocs/registro/index.html">Preinscripciones</a></li>
							
						</ul>
					</nav>
				</header>

               
                   

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="registro.php" method="post"class="form-register" onsubmit="return validar();">
                              <div class="section-title">
                                   <h2>contactanos<small>we love conversations. let us talk!</small></h2>
                              </div>

<div class="col-md-12 col-sm-12">
 <input class="form-control" placeholder=" nombre" type="text" name="name" required="" value="nombre">
<input class="form-control" placeholder="email " type="varchar" name="email" required="" value="correo">
<textarea class="form-control" rows="6" placeholder=" mensaje"type="text" name="message" required="" value="mensaje"></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="enviar" value="enviar mensaje">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-image.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section> 
                  
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.5429081416537!2d-98.94178168503414!3d19.302233986958502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e29c4e66388d%3A0x66510f0d11610f5f!2sPreparatoria%20Abierta%20Siglo%20XXI!5e0!3m2!1ses-419!2smx!4v1591730366743!5m2!1ses-419!2smx" width="2000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
    


     

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>