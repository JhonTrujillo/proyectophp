<?php
/* •
Crea una clase llamada "Persona" que tenga los siguientes atributos
•nombre (cadena)
•edad (entero)
•altura (coma flotante)

los siguientes métodos
• saludar(): imprime en pantalla un mensaje de saludo
• obtener_edad(): devuelve la edad de la persona.
• obtener_altura(): devuelve la altura de la persona. */

class Persona {
    public string $nombre;
    public int $edad;
    public float $altura;

    public function __construct($nombre, $edad, $altura)
    {
        $this->nombre = $nombre;
        $this->edad =  $edad;
        $this->altura = $altura;
        $this->saludar();
        $this->obtener_edad();
        $this->obtener_altura();
    }
    function saludar(){
        echo '<br>Hola!!! ' . $this->nombre;
     }
     function obtener_edad(){
        echo '<br>Su edad es: ' . $this->edad;
     }
     function obtener_altura(){
        echo '<br>Su altura es:' . $this->altura;
     }
  
    
}
$persona = new Persona("Jhon", 33, 1.65);
    //  var_dump($persona);
    

