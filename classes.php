<?php

class WaterBill {
    private $bill;

    public function __construct($bill) {
        $this->bill = $bill;
    }

    public function calculateBill() {
        if($this->bill<=20){
            $this->bill = $this->bill * 35;
        }elseif($this->bill<=49){
            $this->bill = (20 * 35) + (($this->bill-20) * 40);
        }elseif($this->bill<=100){
            $this->bill =  (20 * 35) + (29 * 40) + (($this->bill-49)* 45);
        }else{
            $this->bill = (20 * 35) + (29 * 40) + (51 * 45) + (($this->bill-100) * 50);
        }
    }

    public function displayBill() {
        echo "<h3>This month's water bill is: <b>Ksh $this->bill <b><h3>";
    }
}

$waterBill = new WaterBill($_POST["water-bill"]);
$waterBill->calculateBill();
$waterBill->displayBill();

?>  