<?php

/*
Si la temperatura es mayor o igual a 30, mostrar "Hace mucho calor".
Si la temperatura está entre 20 y 29, mostrar "El clima es agradable".
Si la temperatura está entre 10 y 19, mostrar "Hace frío".
Si la temperatura es menor a 10, mostrar "Hace mucho frío".
*/

$temperatura = 25;

if($temperatura >= 30){
    echo "Hace mucho calor";
} elseif ($temperatura >= 20){
    echo "El clima es agradable";
} elseif($temperatura >= 10){
    echo "Hace frío";
} else {
    echo "Hace mucho frío";
}


?>