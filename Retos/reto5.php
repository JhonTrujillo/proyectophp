<?php
/* 
• Crea una clase llamada "Persona" con los siguientes atributos 
    nombre(cadena),
    edad(entero) y los siguientes métodos
    presentarse(): imprime en pantalla un mensaje indicando el nombre y la edad de la persona.

• Crea una clase llamada Estudiante " que herede de la clase "Persona" y tenga un atributo adicional
    • carrera (cadena )y los siguientes métodos adicionales
    • estudiar(): imprime en pantalla un mensaje indicando que el estudiante está estudiando
    • presentarse(): sobrescribe el método presentarse () de la clase "Persona" para incluir también la carrera del estudiante
*/

class Persona {
    public string $nombre;
    public int $edad;
    
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad =  $edad;
        $this->presentarse();
    }
    function presentarse(){
        echo "<br>Hola!! Mi nombre es: ". $this->nombre ;
        echo " y tengo ". $this->edad ;
        echo " años";
     }
}
$persona = new Persona("Jhon", 33);
    //  var_dump($persona);

class Estudiante extends Persona{
    public string $carrera;

    public function __construct($carrera, $nombre, $edad)
        {
            $this->carrera = $carrera;
            parent::__construct($nombre, $edad);
            $this->estudiar();
            // $this->presentarse();
           
        }
    function estudiar()
        {
            echo "<br>El estudiante esta estudiando". $this->carrera;
        }    

        function presentarse(){
           echo "<br>Hola!! Mi nombre es: ". $this->nombre ;
           echo " , tengo ". $this->edad ;
           echo " años y estudio ". $this->carrera;
          
        }
}
$estudiante = new Estudiante (" Programacion PHP", "Jhon", 35);    