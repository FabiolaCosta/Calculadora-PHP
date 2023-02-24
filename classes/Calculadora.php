<?php

    class Calculadora{

        private $total;
        private $numero1;
        private $numero2;
        private $operacao;

        // Esse método é o primeiro a ser chamado asssim que instanciamos a classe
        function __construct(){
            $this->total = 0;
            $this->numero1 = 0;
            $this->numero2 = 0;
        }

        public function setNumero1($numero1){
            
            // Validação do número
            if(!is_numeric($numero1)){
                echo 'Informe um número';
            }
            else{
                $this->numero1 = $numero1;     
            }       
        }

        public function setNumero2($numero2){
            
            // Validação do número
            if(!is_numeric($numero2)){
                echo 'Informe um número';
            }
            else{
                $this->numero2 = $numero2;     
            }          
        }

        // Operacoes
        public function somar(){
            $this->total = $this->numero1 + $this->numero2;
        }
        public function subtrair(){
            $this->total = $this->numero1 - $this->numero2;
        }
        public function multiplicar(){
            $this->total = $this->numero1 * $this->numero2;
        }
        public function dividir(){
            if($this->numero2 == 0){
                echo 'Por favor, informe um número diferente de 0.';
            }else{
                $this->total = $this->numero1 / $this->numero2;
            }
        }

        public function getTotal(){
            return $this->total;
        }
    }


?>