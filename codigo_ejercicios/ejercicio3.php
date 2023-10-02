<?php
/**
* Ejercicios de la Unidad 2
*
* @author LauraL
* @category Excersises
**/

// Inicializamos las variables
$radio = 20;
// Definimos la constante del número PI.
define("PI", 3.14159265359);


// Fórmula de la circunferencia.
$circunferencia = 2 * PI * $radio;

// Fórmula del área de un círculo.
$area = PI * ($radio ** 2);

// Mostramos los resultados.
echo "El radio es: " . $radio . "<br>";
echo "La longitud de la circunferencia es: " . $circunferencia . "<br>";
echo "El área del círculo es: " . $area . "<br>";

// Mostramos con un echo pero utilizamos un <div< de HTML con estilos para pintar el circulo.
echo '<div style="width: ' . ($radio * 2) . 'px; height: ' . ($radio * 2) . 
'px; background-color: transparent; border-radius: 50%; border: 2px solid black;"></div>';

?>