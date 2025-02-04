<?php 

/* *************** EJERCICIO STRINGS AVANZADO *************** */

// limpiarTexto($texto) → Elimina los espacios en blanco de los extremos.

$texto = "  ¡Hola amigos!  ";

function limpiarTexto($texto){
    return trim($texto);
}

echo "Texto limpio: ".limpiarTexto($texto)."<br>";

// dividirFrase($frase, $separador) → Convierte una frase en un array.

function dividirFrase($frase, $separador){
    return explode($separador, $frase);
}

$frutas = "naranjas, manzanas, peras, fresas, platanos";
print_r(dividirFrase($frutas, ", "));

// Mejora opcional: si quieres asegurarte de que no hay espacios extra en los elementos, usa:
function dividirFrase2($frase, $separador){
    return array_map('trim', explode($separador, $frase));
}



// unirPalabras($array, $separador) → Une un array de palabras en un string.

function unirPalabras($array, $separador){
    return implode($separador, $array);
}

$postres = ["helado", "natillas", "flan", "macedonia", "yogur"];

    // Mejora opcional: Si quieres asegurarte de que no haya espacios extra en los elementos antes de unirlos:
function unirPalabras2($array, $separador){
    return implode($separador, array_map('trim', $array));
}



echo unirPalabras($postres, ", ")."<br>";

// rellenarNumero($numero, $longitud) → Rellena un número con ceros a la izquierda.

function rellenarNumero($numero, $longitud){
    return str_pad($numero, $longitud, "0", STR_PAD_LEFT);
}

$numero = 7;
echo "Agente ".rellenarNumero($numero, 3)."<br>";

//invertirCadena($texto) → Invierte el string.

function invertirCadena($texto){
   return strrev($texto);
}

$saludo = "ejej aloH";
echo invertirCadena($saludo)."<br>";


// capitalizarFrase($texto) → Convierte la primera letra de cada palabra a mayúscula (ucwords()).

function capitalizarFrase($texto){
    return ucwords($texto);
}

echo capitalizarFrase("hola caracola ¿cómo va la gramola?")."<br>";


// contarOcurrencias($texto, $palabra) → Cuenta cuántas veces aparece una palabra en un texto (substr_count()).
/*
function contarOcurrencias($texto, $palabra){
    return substr_count(implode(" ", array_map('trim', explode(" ", $texto))), $palabra); 
}
*/

function contarOcurrencias($texto, $palabra){
    return substr_count($texto, $palabra);
}

$frase = "El perro de San Roque no tiene rabo, pero es un perro";

echo contarOcurrencias($frase, "perro")."<br>"; 

// recortarTexto($texto, $longitud) → Recorta un texto sin cortar palabras completas (wordwrap()).

function recortarTexto($texto, $longitud = "10"){
    return wordwrap($texto, $longitud, "\n", false);
}

$parrafo = "El Perro de San Roque se llama “Melampo” y según el famosísimo dicho Ramón Ramírez fue quien le cortó el rabo.";

echo nl2br(recortarTexto($parrafo, 20))."<br>"; //Añadir nl2br() al imprimir permite ver los saltos de línea en el navegador.



// alternarMayusculas($texto) → Convierte los caracteres en mayúsculas y minúsculas alternadas (str_split()).

function alternarMayusculas($texto){
    $letras = str_split($texto, 1);
    foreach($letras as $index => $letra){
        if ($index % 2 == 0){
            $letras[$index] = strtoupper($letra);
        } else {
            $letras[$index] = strtolower($letra);
        }
    }
    return implode("", $letras);
}

$parrafo = "el perro de san roque";

echo alternarMayusculas($parrafo)."<br>";

// esPalindromo($texto) → Indica si una palabra o frase es un palíndromo (strrev()).

function esPalindromo($texto){
    $texto = strtolower(preg_replace('/\s+/', '', trim($texto))); // limpia el texto de espacios y lo convierte a minusculas
    return $texto == strrev($texto) ? "Sí" : "No";
}

$palindromo = "Dabale arroz a la zorra el abad";

echo "¿Es un palíndromo? ".esPalindromo($palindromo);

?>