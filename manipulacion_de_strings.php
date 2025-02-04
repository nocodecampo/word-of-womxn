<?php 

// strlen($string) - Longitud del texto
// Devuelve el número de caracteres (incluyendo espacios).
$texto = "Hola, PHP!";
echo strlen($texto)."<br>";

// strtoupper($string) y strtolower($string) - Mayúsculas y minúsculas
// Convierte el texto a mayúsculas o minúsculas.
$texto = "Hola Mundo";
echo strtoupper($texto)."<br>";
echo strtolower($texto)."<br>";

// substr($string, inicio, longitud) - Extraer parte de un string
// Permite obtener una parte del texto.
$texto = "Bienvenido a PHP";
echo substr($texto, 4, 12)."<br>";

// strpos($string, "palabra") - Buscar una palabra en un string
// Devuelve la posición de la primera aparición de una palabra o false si no la encuentra.
$texto = "¡Me encanta PHP!";
$posicion = strpos($texto, "encanta");

if($posicion !== false){
    echo "La palabra 'encanta' está en la posición $posicion <br>";
} else {
    echo "No se encontró la palabra";
}

echo "<h1>".($posicion !== false ? "La palabra 'encanta' está en la posición $posicion <br>" : "No se encontró la palabra")."</h1>";

// str_replace("buscar", "reemplazo", $string) - Reemplazar texto
// Sustituye una palabra dentro de un string.
$texto = "Me gusta PHP";
$nuevoTexto = str_replace("PHP", "Javascript", $texto);

echo $nuevoTexto."<br>";

?>