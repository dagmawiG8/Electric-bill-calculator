<!DOCTYPE html>
<html lang="en">

<head>
	<title> </title>
</head>

<body>
	<div>
		<h1 style="text-align: center"> A PHP program to Calculate Electricity Bill </h1>
		<form action="" method="post" style="margin-left: 43%">
            	<input type="number" name="number" placeholder="Enter unit size" />
            	<input type="submit" name="submit" value="Submit" />
		</form>
        <br/>
	</div>
</body>

</html>

<?php

function calculate($units): float
{
    $first_50 = 3.50;
    $from_50_to_150 = 4.00;
    $from_150_to_250 = 5.20;
    $above_250 = 6.50;

    if($units <= 50) {
        $bill = $units * $first_50;
    }
    else if($units <= 150) {
        $bill = (50 * $first_50) + (100 * $from_50_to_150);
    }
    else if($units <= 250) {
        $bill = (50 * $first_50) + (100 * $from_50_to_150) + (100 * $from_150_to_250);
    }
    else {
        $bill = (50 * $first_50) + (100 * $from_50_to_150) + (100 * $from_150_to_250) + (($units - 250) * $above_250);
    }

    return $bill;
}

    if (isset($_POST['submit'])) {
        $bill_units = $_POST['number'];
        if (!empty($bill_units)) {
            echo "<h4 style='text-align: center'> The calculated bill is: ". calculate($bill_units). "</h4>";
        }
    }
?>
