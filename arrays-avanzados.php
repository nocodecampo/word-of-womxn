<?php

/* ********* Funciones Avanzadas con Arrays  ********* */

// 01 - array_map($función, $array) - Transformar elementos
// Aplica una función a cada elemento del array y devuelve un nuevo array.

function duplicar($numero){
    return $numero * 2;
}

$numeros = [1, 2, 3, 4, 5, 6];

$duplicados = array_map("duplicar", $numeros);

print_r($duplicados);
echo implode(", ", $duplicados)."<br>";



// 02 - array_filter($array, $función) - Filtrar elementos
// Filtra elementos de un array usando una función.

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$pares = array_filter($numeros, function($num){
    return $num % 2 == 0;
});

print_r($pares);


// 03 - array_reduce($array, $función, $valor_inicial) - Reducir un array a un solo valor

$numeros = [1, 2, 3, 4, 5];

$suma = array_reduce($numeros, function($acumulador, $num){
    return $acumulador + $num;
}, 0);

print_r($suma); //15



// 04 - array_unique($array) - Eliminar duplicados
// Elimina valores repetidos de un array.

$valores = [1, 2, 2, 3, 4, 4, 5];

$unicos = array_unique($valores, SORT_REGULAR);
print_r($unicos);


// 05 - array_merge($array1, $array2) - Combinar arrays
// Une varios arrays en uno solo.

$numeros1 = [1, 2, 3];
$numeros2 = [4, 5, 6];

$merge = array_merge($numeros1, $numeros2);

print_r($merge);


/* ******Ejercicio 14: Funciones Avanzadas con Arrays****** */

// cuadrados($numeros) → Devuelve un array con los números elevados al cuadrado (array_map()).

$numeros = [1,2,3,4,5,];

function cuadrados($numero){
    return $numero * $numero;
}

$cuadrados = array_map("cuadrados", $numeros);

print_r($cuadrados);


// filtrarNegativos($numeros) → Devuelve solo los números positivos (array_filter())

$numeros = [1, 2, -3, 4, -5,];

function filtrarNegativos($numeros){
    return array_values(array_filter($numeros, fn($num) => $num >=0));   
}

print_r(filtrarNegativos($numeros));

// sumarArray($numeros) → Devuelve la suma total de los números (array_reduce()).

$cifras = [300, 24, 11, 33, 7, 9];

function sumarArray($numeros){
    return array_reduce($numeros, fn($acumulador, $num) => $acumulador + $num, 0);
}
print_r(sumarArray($cifras));


// eliminarDuplicados($array) → Devuelve el array sin valores repetidos (array_unique()).

$repetidos = [3, 3, 4, 5, 6, 6, 7];

function eliminarDuplicados($array){
    return array_unique($array);
}

print_r(eliminarDuplicados($repetidos));


// combinarArrays($array1, $array2) → Une dos arrays en uno (array_merge()).

$array1 = [1,2,3];
$array2 = [4,5,6];

function combinarArrays($array1, $array2){
    return array_merge($array1, $array2);
}

$merged = combinarArrays($array1, $array2);

print_r($merged);

?>