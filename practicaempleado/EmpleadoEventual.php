<?php
require_once 'Empleado.php';

class EmpleadoEventual extends Empleado
{

    public $ventas;
    const COMISION = 5;


    public function __construct($nombre, $apellido, $dni, $salario,$ventas)
    {
        parent::__construct($nombre, $apellido, $dni, $salario); 
            $this->ventas = $ventas;
    }
  
    public function calcularComision() {
        $comis = 0;
        $total = 0;
        foreach ($this->ventas as $ven) {
            
            $total += $ven;
        }
        $comis=$total * self::COMISION /100;
        return $comis;
    }
    
    public function calcularIngresoTotal() {
      return $this->salario + $this->calcularComision();
    }

}
