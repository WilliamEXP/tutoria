<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    <h3 class="titulo">La Tutoría como estrategia para la formación integral</h3>  
    <div class="container" >
        <div class="menu active">
        
        <h3 class = "txt-center">Índice</h3>
        <li><a href="index.php" id = "index">Directorio</a></li>
        <li><a href="introduccion.php" id = "introduccion">Introducción</a></li>
    
        <li><a href="operacion.html" id = "introduccion">Operación del programa</a></li>
        <li class="sub"><a href = "aspectos.html" id = "introduccion">Aspectos fundamentales de operación</a></li>
        <li class="sub"><a href="tuto_gru.html" id = "introduccion">Tutoria grupal</a></li>
        <li class="sub"><a href="tuto_indi.html" id = "introduccion">Tutoría individual</a></li>
        <li class="sub"><a href="comite.html" id = "introduccion">Comité de Tutorías</a></li>
        <li class="sub"><a href="contexto.html" id = "introduccion">Contexto y operación de la evaluación</a></li>
        
        <li><a href="definiciones.html">Definiciones Operacionales</a></li>
        <li class="sub"><a href="definicion.html" id = "introduccion">Definición de Conceptos</a></li>
    
        <li><a href="instrumentos.html" id = "introduccion">Instrumentos Para La Operación Del Programa</a></li>
        <li class="sub"><a href="formato.html" id = "introduccion">Formato de Trabajo</a></li>
    
        <li><a href="guia.html" id = "introduccion">Guia Para el Tutor</a></li>
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
    case '/tutorias/index.php':
        var elemento = document.getElementById("index");
                                elemento.className += " active";

    break;
    case '/tutorias/introduccion.php':
        var elemento = document.getElementById("introduccion");
                                elemento.className += " active";
                                
    break;
    }
        </script>
</body>
</html>