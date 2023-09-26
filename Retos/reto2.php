<?php
/*
Declare una variable de tipo booleano llamada es_mayor_edad " y asígnele el valor de true si la edad es mayor o igual a 18, o false si es
menor a 18.

•Declare una variable de tipo booleano llamada es_alto " y asígnele el valor de true si la altura es mayor o igual a 1.70, o false si es menor a
1.70.

•Realice las siguientes operaciones lógicas y muestre el resultado en pantalla

•Negación de la variable " es_mayor_edad

•Conjuncción de la variable " es_mayor_edad " y es_alto

•Disyunción de la variable " es_mayor_edad " y es_alto

*/

echo " <br><br> ******* RETO 2 ******* <br>";
echo " <br><br> ******* Ejercicio 1 ******* <br>";
// boolean
$es_mayor_edad = true;
$edad2 = 18;
switch($edad2){
    case ($edad2 >= 18);
       var_dump($es_mayor_edad);
       echo "es mayor de edad";
       break;
    case ($edad2 <= 18);
         echo "Es menor a 18";
        break;
    default:
        echo "Digite una edad";
        break;
}

echo " <br><br> ******* RETO 2 ******* <br>";
echo " <br><br> ******* Ejercicio 2 ******* <br>";

$es_alto = true;
$no_es_alto = false;
$altura = 180;
switch($altura){
    case ($altura >= 170);
       var_dump($es_alto);
       echo "es alto";
       break;
    case ($altura <= 170);
        var_dump($no_es_alto);
         echo "No es alto";
        break;
    default:
        echo "Digite una altura";
        break;
}