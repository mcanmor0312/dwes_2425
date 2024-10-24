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

    //Métodos getter y setter para valor1
    public function getValor1() {
        return $this->valor1;
    }
    
    public function setValor1($valor) {
        $this->valor1 = $valor;
    }

    //Métodos getter y setter para valor2
    public function getValor2() {
        return $this->valor2;
    }
    
    public function setValor2($valor) {
        $this->valor2 = $valor;
    }

    //Métodos getter y setter para operacion
    public function getOperacion() {
        return $this->operacion;
    }
    
    public function setOperacion($operacion) {
        $this->operacion = $operacion;
    }

    //Métodos getter y setter para resultado
    public function getResultado() {
        return $this->resultado;
    }
    
    public function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    //Métodos de operaciones matemáticas
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
?>
