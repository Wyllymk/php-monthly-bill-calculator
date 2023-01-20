<?php

    class Bills{
        public $bill = $_POST["water-bill"];
        
        public function __construct($bill){
            $this->bill = $bill;
        }
        public function __destruct($bill){
            $this->bill;
        }
    }
            

            
                if($bill<=20){
                    $bill = $bill * 35;
                }elseif($bill<=49){
                    $bill = (20 * 35) + (($bill-20) * 40);
                }elseif($bill<=100){
                    $bill =  (20 * 35) + (29 * 40) + (($bill-49)* 45);
                }else{
                    $bill = (20 * 35) + (29 * 40) + (51 * 45) + (($bill-100) * 50);
                }
                
            echo "<h3>This month's water bill is: <b>Ksh $bill <b><h3>";

?>  