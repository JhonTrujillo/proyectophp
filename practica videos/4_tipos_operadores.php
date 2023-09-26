<?php
// Ejemplo concatenacion
$a = "Juan le gusta la ";
$b = $a ."cerveza !";

echo "<b>Resultado 1:</b><br>";
echo "Valor A: ";
echo $a;

echo "<br>";
echo "Valor B: ";
echo $b;

// asignacion sobre concatenacion
$c = "Pedro le gusta la ";
$c .= "cerveza !";

echo "<br><br>";
echo "<b>Resultado 2:</b><br>";
echo $c;

echo " <br><br> ******* OPERADORES ARITMETICA******* ";
$valorCerveza = 500;
$numDeCervezas = 2;

$adicion = $valorCerveza + $numDeCervezas;
$sustraccion = $valorCerveza - $numDeCervezas;
$multiplicacion = $valorCerveza * $numDeCervezas;
$division = $valorCerveza / $numDeCervezas;

// residuo 
$modulo = $valorCerveza % $numDeCervezas;
//$modulo = 15 % 2;

// Exponenciacion
$exponenciacion = $valorCerveza ** $numDeCervezas;

echo "<br>";
echo "<b>Resultado adicion:</b><br>";
echo $adicion;

echo "<br>";
echo "<b>Resultado sustracion:</b><br>";
echo $sustraccion;

echo "<br>";
echo "<b>Resultado multiplicacion:</b><br>";
echo $multiplicacion ;

echo "<br>";
echo "<b>Resultado division:</b><br>";
echo $division;

echo "<br>";
echo "<b>Resultado modulo:</b><br>";
echo $modulo;

echo "<br>";
echo "<b>Resultado exponenciacion:</b><br>";
echo $exponenciacion;

echo " <br><br> ******* OPERADORES COMPARACION******* ";

//Valor cerveza en dolares
$valorCervezaColombia = "2";
$valorCervezaMexico = "2";
// igual ==
$igual = $valorCervezaColombia == $valorCervezaMexico;
echo "<br><br>Igual:";
var_dump($igual);

// identico === "Tiene en cuenta el tipo de dato"
$valorCervezaColombia2 = "2";
$valorCervezaMexico2 = 2;
$identico = $valorCervezaColombia2 === $valorCervezaMexico2;
echo "<br><br>Identico:";
var_dump($identico);

// No identico !==
$noidentico = $valorCervezaColombia2 !== $valorCervezaMexico2;
echo "<br><br>No Identico:";
var_dump($noidentico);

// diferente != "No tiene en cuenta el tipo de dato"
$diferente = $valorCervezaColombia2 != $valorCervezaMexico2;
echo "<br><br>Diferente:";
var_dump($diferente);

// Mayor que >
$valorCervezaColombia3 = 4;
$valorCervezaMexico3 = 2;
$mayorQue = $valorCervezaColombia3 > $valorCervezaMexico3;
echo "<br><br>Cerveza Colombia es mayor que la de mexico:";
var_dump($mayorQue);

// Menor que <
$valorCervezaColombia3 = 4;
$valorCervezaMexico3 = 2;
$menorQue = $valorCervezaColombia3 < $valorCervezaMexico3;
echo "<br><br>Cerveza Colombia es menor que la de mexico:";
var_dump($menorQue);

// Mayor o igual que >=
$valorCervezaColombia3 = 4;
$valorCervezaMexico3 = 2;
$mayorIgualQue = $valorCervezaColombia3 >= $valorCervezaMexico3;
echo "<br><br>Cerveza Colombia es mayor o igual que la de mexico:";
var_dump($mayorIgualQue);


// Menor o igual que <=
$valorCervezaColombia3 = 4;
$valorCervezaMexico3 = 2;
$menorIgualQue = $valorCervezaColombia3 <= $valorCervezaMexico3;
echo "<br><br>Cerveza Colombia es menor que la de mexico:";
var_dump($menorIgualQue);

echo " <br><br> ******* OPERADORES INCREMENTO - DECREMENTO ******* ";

// PRE-INCREMENTO
$d = 5;
echo "<br><b>PreIncremento:</b><br>";
echo "Debe ser 6: " .--$d;
echo "<br> debe ser 6 : " . $d;

// POST-INCREMENTO
$d = 5;
echo "<br><b>PostIncremento:</b><br>";
echo "Debe ser 5: " .$d--;
echo "<br> debe ser 6 : " . $d;

// PRE-DECREMENTO
$d = 5;
echo "<br><b>PreIncremento:</b><br>";
echo "Debe ser 4: " .--$d;
echo "<br> debe ser 4 : " . $d;

// POST-DECREMENTO
$d = 5;
echo "<br><b>PostIncremento:</b><br>";
echo "Debe ser 5: " .$d--;
echo "<br> debe ser 4 : " . $d;

