<?php
require_once ('Alumno.php');

class AlumnoPresencial extends Alumno
{
   
 public $notas;
 public $inasistencias;
 const PORCENTAJE = 75;
 protected static $diasHabiles;

   public function __construct($nombre , $apellido, $dni, $inasistencias, $notas, $notaFinal = 0) {

        parent::__construct($nombre, $apellido, $dni);
        $this->inasistencias = $inasistencias;
        $this->notas = $notas;
}

public static function setDiasHabiles($dias) {

    return self::$diasHabiles = $dias;
}

public function Porcentaje() {
 
   return (((self::$diasHabiles - $this->inasistencias) / self::$diasHabiles) *100) >= self::PORCENTAJE;       

}

public function CalcularNota() {
    
    foreach ($this->notas as $nota) {
        if ($nota<4) {
            return false;
        }
    }
    return true;
}

public function getNota() {
    if ($this->Porcentaje() === true && $this->CalcularNota() === true) {

        return $this->notaFinal = array_sum($this->notas) / count($this->notas);
    }
    else {

        return $this->notaFinal = 1;
    }
} 
}