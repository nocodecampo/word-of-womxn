<?php
echo "¡Hola, mundo! <br>";

$nombre = "Diego"; // String (Texto)
$edad = 43; // Integer (Número entero)
$altura = 1.75; // Float (Número decimal)
$esEstudiante = true; // Boolean (Verdadero / Falso)

echo "Nombre: $nombre <br>";
echo "Edad: $edad años <br>";
echo "Altura: $altura metros <br>";
echo "Es estudiante: ".($esEstudiante ? "Sí" : "No"). "<br>";

echo "Hola, me llamo $nombre, tengo $edad años y mido $altura metros <br>";

//Operador ternario

$temperatura= 18;

echo "Temperatura: ".($temperatura > 19 ? "Hace calor" : "Hace frío")."<br>";

$a = 5;

echo "Nuevo valor de a: ".$a /=2;

?>