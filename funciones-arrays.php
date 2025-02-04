<?php 

 // Función que recibe un array
// Podemos pasar un array como parámetro y recorrerlo dentro de la función.

function mostrarColores($colores){
    foreach($colores as $color){
        echo "Color: $color <br>";
    }
}

$listaColores = ["Rojo", "Azul", "Amarillo", "Verde"];

mostrarColores($listaColores);

// Función que devuelve un array
// Podemos hacer que una función genere y devuelva un array.

function generarNumeros(){
    return [10, 20, 30, 40, 50];
}

$numeros = generarNumeros();
print_r($numeros);

// Función que filtra un array
// Podemos procesar un array dentro de la función y devolver solo los valores que cumplan una condición.

function numeroPares($numeros){
    $pares = [];
    foreach($numeros as $numeroPar){
        if($numeroPar % 2 == 0){
            $pares[] = $numeroPar;
        }
    }
    return $pares;
}

$listadoNumeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$resultado =numeroPares($listadoNumeros);
print_r($resultado);

function nombresLargos($nombres){
    $largos = [];
    foreach($nombres as $nombre){
        if(strlen($nombre)>5){
            $largos[] = $nombre;
        }
    }
    return $largos;
}

$listadoNombres = ["Diego", "Ana", "Aurelio", "Pepe", "Francisco"];
$solucion = nombresLargos($listadoNombres);
print_r($solucion);

?>