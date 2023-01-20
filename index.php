<?php include "classes.php";?>
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
    <div class="container">
        <h1>PHP Monthly Bill Calculator</h1>
        <div class="content">
            <div class="card">
                <h4>For: 0-20 units</h4>
                <h4>Ksh 35 per unit</h4>
            </div>
            <div class="card">
                <h4>For: 21-49 units</h4>
                <h4>Ksh 40 per unit</h4>
            </div>
            <div class="card">
                <h4>For: 50-100 units</h4>
                <h4>Ksh 45 per unit</h4>
            </div>
            <div class="card">
                <h4>For: 101+ units</h4>
                <h4>Ksh 50 per unit</h4>
            </div>
        </div>
        <div class="form">
            <p class="error"><?php if(isset($_POST["water-bill"]) && (!$_POST["water-bill"] || !$_POST["name"])) echo "Please fill in both name and monthly units!" ?></p>
            <h2>Enter your monthly units here:</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="number" id="water-bill" name="water-bill" placeholder="Enter your units here..">
                </div>
                <input type="submit" value="Submit">
            </form>
            <p class="message"><?php echo $waterBill->displayBill();  ?></p>
        </div>

    </div>
   
</body>
</html>