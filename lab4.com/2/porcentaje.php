<?php 
    class Porcentaje {

        public $boy;
        public $girl;

        public function calcular(){
            $total = $this->boy + $this->girl;
            $pb = round($this->boy / $total, 4) * 100;
            $pg = round($this->girl / $total, 4) * 100;
            return 
        
            "<table class='table table-light table-striped'>
            <tr>
                <th>Niñas</th>
                <th>Niños</th>
            </tr>
            <tr>
                <th><h2>" .round($pb, 2) ."%</h2></th>
                <th><h2>" .round($pg, 2) ."%</h2></th>
            </tr>
            </table>";
        ?>
        <?php }
 
        public function setBoy($boy){
            $this->boy = $boy;
        }

        public function getBoy($boy){
            return $this->boy;
        }

        public function setGirl($girl){
            $this->girl = $girl;
        }

        public function getGirl($girl){
            return $this->girl;
        }
    }
?>