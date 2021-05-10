<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semestre 4</title>
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
        
    <h3 class="titulo"> La Tutoría como estrategia para la formación integral | Semestre 4</h3>  
  </div>   
    <div class="container" >
        <div class="menu active">
        
        <h3 class = "txt-center">Índice | Semestre 4</h3>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="s4-semana1.php" id="s4-semana1">Presentación / Foto grupal</a></li>
        <li><a href="s4-semana2.php" id="s4-semana2">comprención lectora</a></li>
        <li><a href="s4-semana3.php" id="s4-semana3">Elaboración de resúmenes</a></li>
        <li><a href="s4-semana4.php" id="s4-semana4">TElaboración de ensayo</a></li>
        <li><a href="s4-semana5.php" id="s4-semana5">Avance Escolar</a></li>
        <li><a href="s4-semana6.php" id="s4-semana6">Identidad con el programa educativo</a></li>
        <li><a href="s4-semana7.php" id="s4-semana7">Motivación</a></li>
        <li><a href="s4-semana8.php" id="s4-semana8">Elaboración de una presentación</a></li>
        <li><a href="s4-semana9.php" id="s4-semana9">Avance Escolar</a></li>
        <li><a href="s4-semana10.php" id="s4-semana10">Elaboración de una exposición</a></li>
        <li><a href="s4-semana11.php" id="s4-semana11">Cambio de turno</a></li>
        <li><a href="s4-semana12.php" id="s4-semana12">Evaluación de los tutorados</a></li>
        <li><a href="s4-semana13.php" id="s4-semana13">Avance Escolar</a></li>
        <li><a href="s4-semana14.php" id="s4-semana14">Evaluación de los tutorados</a></li>
        <li><a href="s4-semana15.php" id="s4-semana15">Un día por mi Tec</a></li>
        <li><a href="s4-semana16.php" id="s4-semana16">Avance Escolar</a></li>
        
        
       
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