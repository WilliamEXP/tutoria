<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    <h3 class="titulo">La Tutoría como estrategia para la formación integral | Semestre 1</h3>  
    <div class="container" >
        <div class="menu active">
        
        <h3 class = "txt-center">Índice | Semestre 1</h3>
        
        <li><a href="s1-semana1.php" class = "active">Presentación / Foto grupal</a></li>
        <li><a href="s1-semana2.php">Funcionamiento del ITS Motul</a></li>
        <li><a href="s1-semana3.php">Funcionamiento del ITS Motul (parte II)</a></li>
        <li><a href="s1-semana4.php">Transición Bachillerato - Educación Superior</a></li>
        <li><a href="s1-semana5.php">Avance Escolar</a></li>
        <li><a href="s1-semana6.php">Elaboración del expediente</a></li>
        <li><a href="s1-semana7.php">La línea de la vida</a></li>
        <li><a href="s1-semana8.php">FODA personal</a></li>
        <li><a href="s1-semana9.php">Avance Escolar</a></li>
        <li><a href="s1-semana10.php">Evaluación de docente</a></li>
        <li><a href="s1-semana11.php">Evaluación tutor y tutorado</a></li>
        <li><a href="s1-semana12.php">Evaluación de los tutorados</a></li>
        <li><a href="s1-semana13.php">Avance Escolar</a></li>
        <li><a href="s1-semana14.php">Evaluación de los tutorados</a></li>
        <li><a href="s1-semana15.php">Un día por mi Tec</a></li>
        <li><a href="s1-semana16.php">Avance Escolar</a></li>
        
        
       
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