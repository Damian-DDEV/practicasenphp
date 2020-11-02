<?php
require_once 'Empleado.php';

class EmpleadoPermanente extends Empleado
{
    public $fechaIngreso;

    public function __construct($nombre, $apellido, $dni, $salario,
                                 DateTime $fechaIngreso = null)
    {
        parent::__construct($nombre, $apellido, $dni, $salario);
        if (is_null($fechaIngreso)) {
            //Asigna hoy como fecha de ingreso:
            $this->fechaIngreso = new DateTime();
        }
        else {
            $this->fechaIngreso = $fechaIngreso;
        }
    }

    public function calcularAntiguedad() {
        //Retorna la antigüedad en años.
        $antiguedad = $this->fechaIngreso->diff(new DateTime());
        return $antiguedad->y;
    }

    public function calcularComision() {
        
        return "{$this->calcularAntiguedad()}%";
    }
    
    public function calcularIngresoTotal() {
      return $this->salario + $this->salario * $this->calcularAntiguedad()/100;
    }

}


