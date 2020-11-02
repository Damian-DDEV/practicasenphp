<?php
require_once ('IAlumno.php');

class Alumno implements IAlumno
{
    protected $nombre;
    protected $apellido;
    protected $dni;


    public function __construct($nombre, $apellido, $dni){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }


    public function getNombreApellido()
    {
        return $this->nombre . " " . $this->apellido; 
    }
    public function getDNI()
    {
        return $this->dni;
    }

    public function __toString()
    {
        return "Nombre y apellido: " . $this->nombre . " " . $this->apellido
        . " DNI " . $this->dni . " Nota " . $this->getNota();
    }

}
