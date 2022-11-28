<?php 
    class SalarioBruto {
        
        public $horas;
        public $pagoh;

        public function calculo1(){
            $sb = $this->horas * $this->pagoh;
            $d = 0.2 * $sb;
            $sn = $sb - $d;
            return "Las horas trabajadas fueron de: " .$this->horas. "<br>" . "El pago por hora es de: " .$this->pagoh. "<br>" . "El salario bruto es de: " .$sb. "<br>" . "El descuento seria de: " .$d. "<br>" ."El salario neto es de: " .$sn. "<br>";
        }

        public function setHoras($horas){
            $this->horas = $horas;
        }

        public function getHoras($horas){
            return $this->horas;
        }

        public function setPagoH($pagoh){
            $this->pagoh = $pagoh;
        }

        public function getPagoH($pagoh){
            return $this->pagoh;
        }

    }


?>