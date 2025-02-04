<?php

// Array indexado
$colores = ["rojo", "azul", "amarillo"];

echo $colores[1]."<br>";

foreach ($colores as $color) {
    echo $color."<br>";
}

// Array asociativo
$datos = [
    "nombre" => "Diego",
    "edad" => 43,
    "pais" => "España",
];

echo $datos["pais"]."<br>";

// Array multidimensional
$personas = [
    [
        "nombre" => "Pepe",
        "edad" => 32,
    ],
    [
        "nombre" => "María",
        "edad" => 26,
    ],
    [
        "nombre" => "Manuel",
        "edad" => 44,
    ],
];

echo $personas[1]["edad"]."<br>";

foreach($personas as $persona){
    echo $persona["nombre"]." tiene ".$persona["edad"]." años<br>";
}






?>