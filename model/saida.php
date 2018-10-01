<?php

class saida {
    private $placa;
    private $entrada;
    private $saida;
    private $cE;
    private $cS;
            
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

    function calculoTempo(){
        $this->cE = strtotime($this->entrada);
        $this->cS = strtotime($this->saida);
 
        return $tempo = ($this->cS - $this->cE)/3600;         
    }
    function valor(){
       $valor = $this->cS - $this->cE;
       $valor = ($valor * 2)/3600;        
       if(($this->saida)<($this->entrada)){
           return "O horario de entrada não pode ser maior que o de saída!";
    }else{
        return $valor;
    }
    }
    
    public function __toString() {
        date_default_timezone_set('America/Sao_Paulo');        
        return "<br/>Estacionamento referente à: ".date('d/m/Y').
                "<br/>Placa do Carro: ".$this->placa.
               "<br/>Hora de Entrada: ".$this->entrada.
               "<br/>Hora de Saída: ".$this->saida.
               "<br/>Tempo total: ".$this->calculoTempo()." Hora(s)".
               "<br/>Valor à Pagar: R$ ".$this->valor();
    }

}
