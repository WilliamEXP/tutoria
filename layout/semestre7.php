<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Semestre 7</title>
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
        
    <h3 class="titulo"> La Tutoría como estrategia para la formación integral | Semestre 7</h3>  
  </div>     
    <div class="container" >
        <div class="menu active">
        
        <h3 class = "txt-center">Índice | Semestre 7</h3>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="s7-semana1.php" id="s7-semana1">Presentación / Foto grupal</a></li>
        <li><a href="s7-semana2.php" id="s7-semana2">Redes sociales</a></li>
        <li><a href="s7-semana3.php" id="s7-semana3">Opciones de titulación</a></li>
        <li><a href="s7-semana4.php" id="s7-semana4">Imagen profesional</a></li>
        <li><a href="s7-semana5.php" id="s7-semana5">Avance Escolar</a></li>
        <li><a href="s7-semana6.php" id="s7-semana6">Como elaborar un Curriculum Vitae</a></li>
        <li><a href="s7-semana7.php" id="s7-semana7">Presentación de CV</a></li>
        <li><a href="s7-semana8.php" id="s7-semana8">Lectura de textos científicos y técnicos</a></li>
        <li><a href="s7-semana9.php" id="s7-semana9">Avance Escolar</a></li>
        <li><a href="s7-semana10.php" id="s7-semana10">Hablar en público</a></li>
        <li><a href="s7-semana11.php" id="s7-semana11">Hablar en público</a></li>
        <li><a href="s7-semana12.php" id="s7-semana12">Evaluación de los tutorados</a></li>
        <li><a href="s7-semana13.php" id="s7-semana13">Avance Escolar</a></li>
        <li><a href="s7-semana14.php" id="s7-semana14">Evaluación de los tutorados</a></li>
        <li><a href="s7-semana15.php" id="s7-semana15">Un día por mi Tec</a></li>
        <li><a href="s7-semana16.php" id="s7-semana16">Avance Escolar</a></li>
        
        
       
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