<?php 

$num1 = 5; // integer
$num2 = "5"; // string

//SUMA
echo "Suma: ".($num1 + $num2)."<br>"; // Suma: 10

//RESTA
echo "Resta: ".($num1 - $num2)."<br>"; // Resta: 0

//MULTIPLICACIÓN
echo "Multiplicación : ".($num1 * $num2)."<br>"; // Multiplicación : 25

//DIVISIÓN
echo "División: ".($num1 / $num2)."<br>"; // División: 1

// MÓDULO (RESTO DE LA DIVISIÓN)
echo "Módulo: ".($num1 % $num2)."<br>"; // Módulo: 0

// SON IGUALES
echo "¿Son iguales? ".($num1 == $num2 ? "Sí" : "No")."<br>"; // ¿Son iguales? Sí

// SON IDÉNTICOS
echo "¿Son idénticos? ".($num1 === $num2 ? "Sí": "No"); // ¿Son idénticos? No
?>