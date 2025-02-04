<?php 
/********** EJERCICIOS ***********/

//contarCaracteres($texto) → Devuelve la cantidad de caracteres del string.
$texto = "Me encantan estos ejercicios";
function contarCaracteres($texto) : int {
   return strlen($texto);
}

echo "Número de caracteres: ".contarCaracteres($texto)."<br>";

//mayusculas($texto) → Convierte el texto a mayúsculas.
$texto = "Hola Lumen, gracias por enseñarme";
function mayusculas($texto) : string {
    return strtoupper($texto);
}

echo "Texto en mayúsculas: ".mayusculas($texto)."<br>";

// extraerPalabra($texto, $inicio, $longitud) → Extrae una parte del texto
$texto = "Así da gusto aprender";
function extraerPalabra($texto, $inicio, $longitud){
    return substr($texto, $inicio, $longitud);
}

echo "Palabra extraída: ".extraerPalabra($texto, 7, 6)."<br>";

// buscarPalabra($texto, $palabra) → Indica si una palabra existe en el string.
$texto = "A ver si me hago experto";
function buscarPalabra($texto, $palabra){
    return strpos($texto, $palabra);
}

echo "La palabra 'experto' está en la posición ".buscarPalabra($texto, "experto")."<br>";

//reemplazarPalabra($texto, $buscar, $reemplazo) → Reemplaza una palabra por otra en el texto.
$texto = "Hola Diego";
function reemplazarPalabra($buscar, $reemplazo, $texto){
    return str_replace($buscar, $reemplazo, $texto);
}
$nuevoTexto = reemplazarPalabra("Diego", "Lumen", $texto);
echo "Texto reemplazado $nuevoTexto"."<br>";


/********** EJERCICIOS EXTRA ***********/

// repetirTexto($texto, $veces) → Devuelve el texto repetido $veces veces (str_repeat()).

$texto = "Hola Planeta ";

function repetirTexto($texto, $veces){
    return str_repeat($texto, $veces);
}

echo "Texto repetido: ".repetirTexto($texto, 3)."<br>";

// ultimaLetra($texto) → Devuelve la última letra del string (substr()).

$texto = "Hola Mundo";

function ultimaLetra($texto){
    return substr($texto, -1);
}

echo "Última letra: ".ultimaLetra($texto)."<br>";

// ocultarTexto($texto, $caracter = "*")
// Devuelve un string donde cada letra del texto original
//es reemplazada por un mismo carácter repetido,
//manteniendo la longitud del texto (str_repeat() y strlen()).

function ocultarTexto($texto, $caracter = "*"){
    $longitud = strlen($texto);
    return str_repeat($caracter, $longitud);
}
$ejemplo = "Hola Mundo";
echo ocultarTexto($ejemplo)."<br>";

// sustituirVocales($texto) → Reemplaza todas las vocales por * (str_replace()).

$ejemplo = "Texto ejemplo";

function sustituirVocales($texto){
   return str_replace(["a","e","i","o","u"], "*", $texto);
}

echo sustituirVocales($ejemplo)."<br>";

// contarLetra($texto, $letra) → Cuenta cuántas veces aparece una letra en un texto (substr_count()).

$textoEjemplo = "Esto es un ejemplo";

function contarLetra($texto, $letra){
   return substr_count($texto, $letra);
}

echo contarLetra(strtolower($textoEjemplo), "e")."<br>";

?>