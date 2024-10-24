<?php
/**
 * archivo:class.calculadora.php
 * valor1, 2, operador y resultado
 */
class Class_calculadora{
    #Atributos o propiedades
    private $valor1;
    private $valor2;
    private $operacion;
    private $resultado;

    //Constructor
    public function __construct( $valor1 = null, $valor2 = null, $operacion = null, $resultado = null ){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
        $this->operacion = $operacion;
        $this->resultado = $resultado;
    }
    public function sumar() {
        $this->resultado = $this->valor1 + $this->valor2;
        $this->operacion="suma";
        return $this->resultado;
    }
    public function restar() {
        $this->resultado = $this->valor1 - $this->valor2;
        $this->operacion="resta";
        return $this->resultado;
    }
    public function dividir() {
        $this->resultado = $this->valor1 / $this->valor2;
        $this->operacion="división";
        return $this->resultado;
    }
    public function multiplicar() {
        $this->resultado = $this->valor1 * $this->valor2;
        $this->operacion="multiplicación";
        return $this->resultado;
    }
    public function potencia() {
        $this->resultado = pow($this->valor1, $this->valor2);
        $this->operacion="potencia";
        return $this->resultado;
    }

}

