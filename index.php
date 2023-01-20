<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Bill Calculator</title>
</head>
<body>
<div class="form">
        <h1>Enter your monthly units here:</h1>
        <form action="index.php" method="post">
            <input type="number" id="water-bill" name="water-bill" placeholder="Enter your units here..">
            <input type="submit" value="Submit">

    </form>
    
        <?php
            $bill = $_POST["water-bill"];

            
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
    </div>
</body>
</html>