<?php

$contador = 1;

// while (Mientras se cumpla una condición)
// El bucle while ejecuta el código mientras la condición sea true.

while ($contador <= 5){
    echo "Número: $contador <br>";
    $contador++; // incremento
}

// do-while (Ejecuta al menos una vez)
// El bucle do-while ejecuta el código al menos una vez, incluso si la condición es false.

$contador2 = 6;

do {
    echo "Número: $contador2 <br>";
    $contador2++;
} while ($contador2 <= 5);

// for (Bucle con contador)
// El bucle for es ideal cuando sabemos cuántas veces queremos repetir el código.

for ($i = 7; $i <=10; $i++){
    echo "Número: $i <br>";
}

// foreach (Recorrer Arrays)
// El bucle foreach es perfecto para recorrer arrays sin usar índices manualmente.

$nombres = ["Ana", "Carlos", "Bea", "David"];

foreach($nombres as $nombre){
    echo "Hola, $nombre <br>";
}


/*
 EJERCICIO CONTADOR
*/
/*
for ($i = 1; $i <=10; $i++){
 echo $i."<br>";
}

$num = 1;
while($num <=10){
    echo $num."<br>";
    $num++;
}
*/


for($i = 10; $i>=1; $i--){
    echo $i."<br>";
}

$numero = 10;
while($numero >=1){
    echo $numero."<br>";
    $numero--;
}

$numeros = [1,2,3,4,5,6,7,8,9,10];

foreach($numeros as $num){
    echo $num."<br>";
}


?>