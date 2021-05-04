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
    
        <li><a href="operacion.html">Operación del programa</a></li>
        <li ><a href = "aspectos.html" class="sub">Aspectos fundamentales de operación</a></li>
        <li><a href="tuto_gru.html" class="sub">Tutoria grupal</a></li>
        <li class="sub"><a href="tuto_indi.html">Tutoría individual</a></li>
        <li class="sub"><a href="comite.html">Comité de Tutorías</a></li>
        <li class="sub"><a href="contexto.html">Contexto y operación de la evaluación</a></li>
        
        <li><a href="definiciones.html">Definiciones Operacionales</a></li>
        <li class="sub"><a href="definicion.html">Definición de Conceptos</a></li>
    
        <li><a href="instrumentos.html">Instrumentos Para La Operación Del Programa</a></li>
        <li class="sub"><a href="formato.html">Formato de Trabajo</a></li>
    
        <li><a href="guia.html">Guia Para el Tutor</a></li>
        <li class="sub"><a href="sesion1.html">Semestre 1</a></li>
       
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