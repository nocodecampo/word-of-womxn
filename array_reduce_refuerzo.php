<?php


//multiplicarValores($numeros) → Multiplica todos los valores del array (array_reduce()).

function multiplicarValores($numeros){
    return array_reduce($numeros, fn($multiplicador, $num) => $num * $multiplicador, 1);
}

$arrayParaMultiplicar = [3, 2, 3];

print_r(multiplicarValores($arrayParaMultiplicar));


// concatenarIniciales($nombres) → Devuelve un string con las iniciales de cada nombre (array_reduce()).

$nombresInicial = ["Diego", "Antonio", "David", "Juan"];

function concatenarIniciales($nombres){
    $iniciales = [];
    foreach($nombres as $nombre){
        $iniciales[] = substr($nombre, 0, 1);
    }
    return array_reduce ($iniciales, fn($union, $inicial) => $union." ".$inicial, "");
}

print_r(concatenarIniciales($nombresInicial));


// maximoValor($numeros) → Encuentra el valor más alto en un array (array_reduce()).

$valores = [33, 41, 80, 2];

/*
function maximoValor($numeros){
    return array_reduce($numeros, fn($maximo, $num) => $num > $maximo ? $num : $maximo, PHP_INT_MIN);
}

print_r(maximoValor($valores));
*/

function maximoValor($numeros){
    $maximo = 0;
    foreach($numeros as $num){
        if($num > $maximo){
            $maximo = $num;
        }
    }
    return $maximo;
}

print_r(maximoValor($valores));



?>