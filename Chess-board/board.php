<!DOCTYPE html>
<html lang="en">

<head>
    <title> Chess board </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1 style="text-align: center">Chess Board using Nested For Loop</h1>
    <table style="width: 450px; border: 1px; margin-left: 33%">

    <?php
        for($row=1; $row<=8; $row++) {
            echo "<tr>";
            for($col=1; $col <=8; $col++) {
                $total=$row+$col;
                if($total%2==0) {
                    echo "<td style='height: 30px; width: 30px; background-color: white'></td>";
                }
                else {
                    echo "<td style='height: 30px; width: 30px; background-color: black'></td>";
                }
            }
            echo "</tr>";
        }
    ?>

    </table>
</body>
</html>
