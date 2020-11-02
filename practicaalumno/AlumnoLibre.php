<?php
require_once ('Alumno.php');

class AlumnoLibre extends Alumno
{
   
 private $notaFinal; 

   public function __construct($nombre , $apellido, $dni, $notaFinal) {

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->notaFinal = $notaFinal;
}

public function getNota() {

  return $this->notaFinal;

}

}

