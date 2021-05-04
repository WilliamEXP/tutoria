<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
<script
  src="http://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
  <div>
  <header id="#header">
			<a href="#" id="menu_on">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</header>
    <h3 class="titulo"> La Tutoría como estrategia para la formación integral</h3>  
  </div>
  
    <div class="container" >
        <div class="menu">
        <h3 class = "txt-center">Índice</h3>
        <li><a href="index.php" id = "index">Directorio</a></li>
        <li><a href="introduccion.php" id = "introduccion">Introducción</a></li>
    
        <li><a href="operacion.php" id = "operacion">Operación del programa</a></li>
        <li class="sub"><a href = "aspectos.php" id = "aspectos">Aspectos fundamentales de operación</a></li>
        <li class="sub"><a href="tuto_gru.php" id = "tuto_gru">Tutoria grupal</a></li>
        <li class="sub"><a href="tuto_indi.php" id = "tuto_indi">Tutoría individual</a></li>
        <li class="sub"><a href="comite.php" id = "comite">Comité de Tutorías</a></li>
        <li class="sub"><a href="contexto.php" id = "contexto">Contexto y operación de la evaluación</a></li>
        
        <li><a href="definiciones.php" id="definiciones">Definiciones Operacionales</a></li>
        <li class="sub"><a href="definicion.php" id = "definicion">Definición de Conceptos</a></li>
    
        <li><a href="instrumentos.php" id = "instrumentos">Instrumentos Para La Operación Del Programa</a></li>
        <li class="sub"><a href="formato.php" id = "formato">Formato de Trabajo</a></li>
    
        <li><a href="guia.php" id = "guia">Guia Para el Tutor</a></li>
        <li class="sub"><a href="s1-semana1.php" id = "s1-semana1">Semestre 1</a></li>
        <li class="sub"><a href="s2-semana1.php" id = "s2-semana1">Semestre 2</a></li>
        <li class="sub"><a href="s3-semana1.php" id = "s3-semana1">Semestre 3</a></li>
        <li class="sub"><a href="s4-semana1.php" id = "s4-semana1">Semestre 4</a></li>
        <li class="sub"><a href="s5-semana1.php" id = "s5-semana1">Semestre 5</a></li>
        <li class="sub"><a href="s6-semana1.php" id = "s6-semana1">Semestre 6</a></li>
        <li class="sub"><a href="s7-semana1.php" id = "s7-semana1">Semestre 7</a></li>
        <li class="sub"><a href="s8-semana1.php" id = "s8-semana1">Semestre 8</a></li>
        
        
       
       </div>
       
        <script>
switch (window.location.pathname) {
    case '/tutoria/index.php':
        var elemento = document.getElementById("index");
                                elemento.className += " active";

    break;
    case '/tutoria/introduccion.php':
        var elemento = document.getElementById("introduccion");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/aspectos.php':
        var elemento = document.getElementById("aspectos");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/operacion.php':
        var elemento = document.getElementById("operacion");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/comite.php':
        var elemento = document.getElementById("comite");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/contexto.php':
        var elemento = document.getElementById("contexto");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/definicion.php':
        var elemento = document.getElementById("definicion");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/definiciones.php':
        var elemento = document.getElementById("definiciones");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/guia.php':
        var elemento = document.getElementById("guia");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/instrumentos.php':
        var elemento = document.getElementById("instrumentos");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/tuto_gru.php':
        var elemento = document.getElementById("tuto_gru");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/tuto_indi.php':
        var elemento = document.getElementById("tuto_indi");
                                elemento.className += " active";
                                
    break;
    case '/tutoria/formato.php':
        var elemento = document.getElementById("formato");
                                elemento.className += " active";
                                
    break;
    }
        </script>
        <script>
            $( document ).ready(function() {
    $('#menu_on').click(function(){
    	$('body').toggleClass('ver');
        $('.menu').toggleClass('ver');
    })
});
        </script>
</body>
</html>