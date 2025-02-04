<?php

/***************** Formateo y Manejo Avanzado de Strings *****************/

// 01 - trim($texto) - Eliminar espacios en blanco
// Eimina los espacios en blanco al inicio y al final del texto.

$texto = "       ¡Hola Mundo!       ";
echo "Sin 'trim()': '$texto'<br>";
echo "Con 'trim()': ".trim($texto)."<br>";
// También existen ltrim() (elimina espacios a la izquierda) y rtrim() (a la derecha).

// 02 - explode($separador, $texto) - Dividir un string en un array
// Convierte una cadena de texto en un array, separándola por un delimitador.

$frase = "PHP, Javascript, Python";
$lenguajes = explode(",", $frase);

print_r($lenguajes);

// 03 - implode($separador, $array) - Unir un array en un string
// Convierte un array en un string, uniendo los elementos con un separador.

$palabras = ["Hola", "esto", "es", "PHP"];
$texto = implode(" ", $palabras);

echo $texto."<br>";

// 04 - str_pad($texto, $longitud, $relleno, $tipo) - Rellenar un string
// Ajusta la longitud de un string rellenando con un carácter.

$numero = 7;
echo str_pad($numero, 3, 0, STR_PAD_LEFT)."<br>";

/*
Tipos de relleno:

STR_PAD_LEFT → Rellena por la izquierda.
STR_PAD_RIGHT → Rellena por la derecha.
STR_PAD_BOTH → Rellena por ambos lados.
*/


// 05 - strrev($texto) - Invertir un string
// Devuelve el texto al revés.

$ejemplo = "Esto es un ejemplo";

echo strrev($ejemplo)."<br>";


?>