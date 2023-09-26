<?php
/*
•Creauna función llamada saludar " que no reciba ningún parámetro y que imprima en pantalla el mensaje "¡Hola a todos !" cuando se llame
•Crea una función llamada sumar " que reciba dos números como parámetros y que devuelva la suma de los mismos.
•Crea una función llamada obtener_edad " que reciba el año de nacimiento de una persona como parámetro y que devuelva su edad actual.
•Crea una función llamada convertir_a_mayusculas " que reciba una cadena como parámetro y que devuelva la misma cadena en mayúsculas
•Crea una función llamada calcular_promedio " que reciba un array de números como parámetro y que devuelva el promedio de los mismos.
•Creauna función llamada calcular_area_circulo " que reciba el radio de un círculo como parámetro y que devuelva el área del mismo.
*/
echo " <br><br> ******* RETO 3 ******* <br>";
echo " ******* Funcion Saludar ******* <br>";

function saludar(){
      echo 'Hola!!!';
   }
   saludar();

echo " <br><br>******* Funcion Sumar ******* <br>";

function sumar($num1, $num2){
  return  $num1 + $num2;

 }
 $resultado = sumar( 10, 5);
 echo "El resultado de la suma es : $resultado";

 echo " <br><br>******* Funcion Obtener Edad ******* <br>";

 function obtener_edad($edad3){
    $resultado =  2023 - $edad3;
    echo "Su edad es : $resultado";
 }
 obtener_edad(1990);

 echo " <br><br>******* Funcion convertir a mayuscula ******* <br>";

 function texto($texto){
    $mayuscula =  strtoupper($texto) ;
    echo "Texto en Mayuscula : $mayuscula";
 }
 texto( "jhon trujillo");

 echo " <br><br>******* Funcion promedio ******* <br>";

 function promedio(){
    $numeros = [10,20,30,40];
    $suma = array_sum($numeros);
    echo "suma de los numeros : $suma";
    $total_numeros = count($numeros);
    echo "<br> Cantidad de numeros del array : $total_numeros";
    $promedio = $suma/$total_numeros;
    echo "<br> El promedio del array es : $promedio";
 }
 promedio();
 
 echo " <br><br>******* Funcion area del circulo ******* <br>";
 
 function areaCirculo($radio){
    $areaCirculo =  pi() * ($radio**2);
    echo "area del Circulo es : $areaCirculo";
 }
 areaCirculo(2);
