<?php 

//mayoresDeEdad($edades)
function mayoresDeEdad($edades){
    return array_filter($edades, fn($mayor) => $mayor >= 18 );
}

$edades = [18, 12, 33, 9, 24];
print_r(mayoresDeEdad($edades));

//palabrasCortas($palabras)
function palabrasCortas($palabras){
    return array_filter($palabras, fn($corta) => strlen($corta) <=4);
}

$palabras = ["Joaquín", "Alfredo", "Ana", "Pepe", "Jon"];
print_r(palabrasCortas($palabras));

//numerosImpares($numeros)
function numerosImpares($numeros){
   return array_filter($numeros, function($num){
        return ($num % 2)!== 0;
    });
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8];
print_r(numerosImpares($numeros));


/*
RETO EXTRA
*/

// Crea una función filtrarPorLetra($palabras, $letra)
//que devuelva solo las palabras que comienzan con una letra dada.

function filtrarPorLetra($palabras, $letra){
    return array_filter($palabras, fn($palabra) => substr($palabra, 0, 1) == $letra);
}

print_r(filtrarPorLetra($palabras, "A"));

//Crea una función multiplicarNumeros($numeros, $multiplicador)
//que multiplique todos los valores del array por un número dado.

function multiplicarNumeros($numeros, $multiplicador){
    $resultado = [];
    foreach($numeros as $num){
        $multiplicacion = $num * $multiplicador;
        $resultado[] = $multiplicacion;
    }
    return $resultado;
}

print_r(multiplicarNumeros($numeros, 3));

?>