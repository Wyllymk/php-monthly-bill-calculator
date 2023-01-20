<?php

class WaterBill {
    private $bill;
    public $name;

    public function __construct($bill, $name) {
        $this->bill = $bill;
        $this->name = $name;
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
        return "<h3>$this->name, this month's water bill is: <b>Ksh $this->bill <b><h3>";
    }
}

if (isset($_POST["water-bill"])) {
$waterBill = new WaterBill($_POST["water-bill"], $_POST["name"]);
$waterBill->calculateBill();
$waterBill->displayBill();
}
?>  