<?php
/* 
•Realice las siguientes operaciones matemáticas y muestre el resultado en pantalla
•Suma de la edad y la altura
•Resta de la edad y la altura
•Multiplicación de la edad y la altura
•División de la edad y la altura
•Potencia de la edad elevada a la altura
•Raíz cuadrada de la edad
*/ 
echo " <br><br> ******* OPERADORES ARITMETICA ******* <br>";
$edad = 33;
$altura = 165;

$adicion = $edad + $altura;
$sustraccion = $edad  - $altura;
$multiplicacion = $edad  * $altura;
$division = $edad  / $altura;

$exponenciacion = $edad ** $altura;
$raiz2 = sqrt($edad);

echo"<br>";
echo "<b>Resultado adicion:</b><br>";
echo $adicion;

echo "<br><br>";
echo "<b>Resultado sustracion:</b><br>";
echo $sustraccion;

echo "<br><br>";
echo "<b>Resultado multiplicacion:</b><br>";
echo $multiplicacion ;

echo "<br><br>";
echo "<b>Resultado division:</b><br>";
echo $division;

echo "<br><br>";
echo "<b>Resultado exponenciacion:</b><br>";
echo $exponenciacion;

echo "<br>";
echo "<br>";
echo "<b>Resultado raiz cuadrada:</b><br>";
echo $raiz2;




