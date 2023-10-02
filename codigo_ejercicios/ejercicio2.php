<?php
/**
* Ejercicios de la Unidad 2
*
* @author LauraL
* @category Excersises
**/

// Inicializamos las variables
$nombre = "Laura Luque Bravo";
$edad = 32;
$formacion1 = "Máster Bioinformática";
$formacion2 = "Grado Biología";
$formacion3 = "Técnico superior de laboratorio de diagnóstico clínico"


// VISTA
// Creamos el documento HTML que mostrará las variables que hemos inicializado.
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="imagenes/imagen.jpg" >
    <h1><?php echo $nombre ?></h1>
    <h2>Formación:</h2><br/>
    <ul>
        <li><?php echo $formacion1 ?></li>
        <li><?php echo $formacion2 ?></li>
        <li><?php echo $formacion3 ?></li>
    </ul>

</body>
</html>