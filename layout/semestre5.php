<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semestre 5</title>
    <script
        src="http://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/funcion.js"></script>
</head>
<body>

<div>
  <header id="#header">
			<a href="#" id="menu_on">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</header>
        
    <h3 class="titulo"> La Tutoría como estrategia para la formación integral | Semestre 5</h3>  
  </div>     
    <div class="container" >
        <div class="menu active">
        
        <h3 class = "txt-center">Índice | Semestre 5</h3>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="s5-semana1.php" id="s5-semana1">Presentación / Foto grupal</a></li>
        <li><a href="s5-semana2.php" id="s5-semana2">Autodidactismo</a></li>
        <li><a href="s5-semana3.php" id="s5-semana3">Administración del tiempo</a></li>
        <li><a href="s5-semana4.php" id="s5-semana4">Actividades complementarias </a></li>
        <li><a href="s5-semana5.php" id="s5-semana5">Avance Escolar</a></li>
        <li><a href="s5-semana6.php" id="s5-semana6">Análisis de la retícula de la especialidad</a></li>
        <li><a href="s5-semana7.php" id="s5-semana7">Actitud en las conferencias</a></li>
        <li><a href="s5-semana8.php" id="s5-semana8">Solicitud de ayuda psicológica </a></li>
        <li><a href="s5-semana9.php" id="s5-semana9">Avance Escolar</a></li>
        <li><a href="s5-semana10.php" id="s5-semana10">Plan de vida</a></li>
        <li><a href="s5-semana11.php" id="s5-semana11">Educación Dual</a></li>
        <li><a href="s5-semana12.php" id="s5-semana12">Evaluación de los tutorados</a></li>
        <li><a href="s5-semana13.php" id="s5-semana13">Avance Escolar</a></li>
        <li><a href="s5-semana14.php" id="s5-semana14">Evaluación de los tutorados</a></li>
        <li><a href="s5-semana15.php" id="s5-semana15">Un día por mi Tec</a></li>
        <li><a href="s5-semana16.php" id="s5-semana16">Avance Escolar</a></li>
        
        
       
       </div>
       
       <script>
              jQuery(function($) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     $('li a').each(function() {
      if (this.href === path) {
       $(this).addClass('active');
      }
     });
    });
        </script>
</body>
</html>