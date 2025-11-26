<?php
class Vehiculo{
    public $marca;
    public $modelo;
    public $año;

    public function __construct(string $marca, string $modelo, int $año){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }
    public function mostrarInfo(){
        return "Marca: $this->marca, Modelo: $this->modelo, Año: $this->año";
    }
}

class Coche extends Vehiculo{
    public function __construct(
        string $marca,
        string $modelo,
        int $anio,
        public int $numPuertas
    ){
        parent::__construct($marca, $modelo, $anio);
    }
    public function mostrarInfo(){
        return parent::mostrarInfo() . ", Número de puertas: $this->numPuertas";
    }
}

class CuentaBancaria{
    private $saldo;

    public function depositar($cantidad){
        if($cantidad > 0){
            $this->saldo += $cantidad;
        }else if ($cantidad <= 0){
            echo "No se puede depositar un valor negativo o cero";
        }

    }
    public function retirar($cantidad){
        if($cantidad > $this->saldo){
            echo "No hay suficiente saldo";
        } else {
            $this->saldo -= $cantidad;
        }
    }
    public function mostrarSaldo(){
        return $this->saldo;
    }
}
class empleado{
    public $nombre{
        get => strtoupper ($this->nombre);
    }
    public $salario{
        set {
            if($value < 0){
                throw new Exception ("El salario no puede ser negativo");
            }
            $this->salario = $value;
        }
    }
    public function salarioAnual(){
        return $this->salario * 12;
    }
}
interface Calculable{
    public function calcularArea();
    public function calcularPerimetro();
}
class Rectangulo implements Calculable{
    public $base;
    public $altura;
    public function calcularArea(){
        return $this->base * $this->altura;
    }
    public function calcularPerimetro(){
        return 2 * ($this->base + $this->altura);
    }
}
class Circulo implements Calculable{
    public $radio;
    public function calcularArea(){
        return pi() * pow($this->radio, 2);
    }
    public function calcularPerimetro(){
        return 2 * pi() * $this->radio;
    }
}

?>