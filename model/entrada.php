<?php

class entrada {
    private $placa;
    private $vaga;
    private $entrada;
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

    public function __toString() {
        return "<br/>Placa do Carro: ".$this->placa.
               "<br/>Número da Vaga: ".$this->vaga.
               "<br/>Hora de Entrada: ".$this->entrada;
    }

}
