<?php
    class Calculo {
        public $po;
        public $vu;
        
        public function calcular(){
            $da = $this->po / $this->vu;
            $it = $this->po - $da;
?>
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead> 
            <tr>
            <th scope="col">Año</th>
            <th scope="col">Valor por Año</th>
            <th scope="col">Valor Recuperado</th>
            </tr>
            </thead>
            <?php  for ($i=0; $i < $this->vu+1; $i++){ ?>
            <tr>
            <th><?php echo $i ?></td>
            <th><?php echo $da?></td>
            <td><?php echo $it?></td>
            </tr>
        </table>   
<?php }} 

        public function setPo($po){
            $this->po = $po;
        }

        public function getPo($po){
            return $this->po;
        }

        public function setVu($vu){
            $this->vu = $vu;
        }

        public function getVu($vu){
            return $this->vu;
        }
    }
?>