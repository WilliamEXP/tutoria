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
        <li>Semestre 1</li>
        <li class="sub"><a href="index.html" class = "active">Presentación / Foto grupal</a></li>
        <li class="sub"><a href="sesion2.html">Funcionamiento del ITS Motul</a></li>
        <li class="sub"><a href="sesion3.html">Funcionamiento del ITS Motul (parte II)</a></li>
        <li class="sub"><a href = "#">Transición Bachillerato - Educación Superior</a></li>
        <li class="sub"><a href="#">Avance Escolar</a></li>
        <li class="sub"><a href="#">Elaboración del expediente</a></li>
        <li class="sub"><a href="#">La línea de la vida</a></li>
        <li class="sub"><a href="#">FODA personal</a></li>
        <li class="sub"><a href="#">Avance Escolar</a></li>
        <li class="sub"><a href="#">Evaluación de docente</a></li>
        <li class="sub"><a href="#">Evaluación tutor y tutorado</a></li>
        <li class="sub"><a href="#">Evaluación de los tutorados</a></li>
        <li class="sub"><a href="#">Avance Escolar</a></li>
        <li class="sub"><a href="#">Evaluación de los tutorados</a></li>
        <li class="sub"><a href="#">Un día por mi Tec</a></li>
        <li class="sub"><a href="#">Avance Escolar</a></li>
        
        
       
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