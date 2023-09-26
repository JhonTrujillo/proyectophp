<?php
// integer
$preciopasaje = 2500;
var_dump($preciopasaje);
echo "<br>";
// float
$preciocamisa = 29900.00;
var_dump($preciocamisa);
echo "<br>";

// String
$minombre = "Jhon Trujillo";
var_dump($minombre);
echo "<br>";

// boolean
$esDeDia = true;
$esDeNoche = false;
var_dump($esDeDia);

// datos compuestos
$tiposDeCerveza = ["lager","ales","abadia","alemana"];
var_dump($tiposDeCerveza);
echo "<br>";

// arrays con indices definidos
$tiposDeCervezaConValor = [
    "lager" => 2500,
    "ales" => 3000,
    "abadia" => 4500,
];
var_dump($tiposDeCervezaConValor["abadia"]);




