<?php
/*
•Modifica la clase "Persona" para agregar los atributos privados:
    correo (cadena)
    teléfono (cadena) 

y los métodos públicos para acceder y modificar estos
    getCorreo(): devuelve el correo electrónico de la persona.
    setCorreo($correo): establece el correo electrónico de la persona.
    getTelefono(): devuelve el número de teléfono de la persona.
    setTelefono($telefono): establece el número de teléfono de la persona.


Modificala clase Estudiante " para agregar el atributo privado:
    númerode matrícula (cadena) y los métodos públicos para acceder y modificar este atributo
    getMatricula(): devuelve el número de matrícula del estudiante.
    setMatricula($matricula): establece el número de matrícula del estudiante.

Modifica el método "presentarse()" de la clase "Persona" para incluir el correo electrónico y número de teléfono de la persona.
Modifica el método "presentarse()" de la clase "Estudiante" para incluir el correo electrónico, número de teléfono y número de matrícula del estudiante.
Crea un objeto de la clase "Estudiante" y muestra en pantalla su nombre, edad, carrera, correo electrónico, número de teléfono y número de matrícula.

Prueba los métodos de acceso y modificación de los atributos de las clases "Persona" y "Estudiante" para cambiar el correo el electrónico y número de teléfono de la
persona y el número de matrícula del estudiante.*/

class Persona {
    public string $nombre;
    public int $edad;
    private string $correo;
    private string $telefono;
    
    public function __construct($nombre, $edad, $correo, $telefono)
    {
        $this->nombre = $nombre;
        $this->edad =  $edad;
        $this->correo = $correo;
        $this->telefono =$telefono;
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