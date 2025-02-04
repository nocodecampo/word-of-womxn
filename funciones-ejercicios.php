<?php 

// SALUDO
function saludo(){
    echo "¡Bienvenido a PHP!<br>";
}

saludo();

// MULTIPLICACIÓN
function multiplicar($a, $b){
    return $a * $b;
}

$total = multiplicar(10, 2);
echo "Multiplicación = $total<br>";

// MAYORÍA DE EDAD

function mayorEdad1($edad){
    if ($edad >=18){
        return "Eres mayor de edad";
    } else {
        return "Eres menor de edad";
    }
}

function mayorEdad2($edad){
   return ($edad >=18 ? "Eres mayor de edad" : "Eres menor de edad");
}

echo mayorEdad2(16);



?>