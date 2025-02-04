<?php 

// 01 Funciones sin parámetros
// Son funciones simples que ejecutan una acción sin recibir valores.

function saludar(){
    echo "Hola, bienvenido a PHP <br>";
}
saludar();

// 02 Funciones con parámetros
// Podemos pasar valores a una función para personalizar su comportamiento.

function saludar2($nombre){
    echo "Hola, $nombre<br>";
}
saludar2("Diego");

// 03 Funciones con retorno (return)
// Las funciones pueden devolver valores en lugar de imprimir directamente.

function suma($a, $b){
    return $a + $b;
}
$resultado = suma(3, 2); // almacenamos el resultado en la variable
echo $resultado."<br>";

// 04 Parámetros con valores por defecto
// Podemos asignar un valor por defecto a los parámetros si no se envía ninguno.

function despedir($nombre = "invitado"){
    echo "Adiós, $nombre<br>";
}

despedir();
despedir("Juan");

?>